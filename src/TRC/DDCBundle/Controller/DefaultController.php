<?php

namespace TRC\DDCBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

use TRC\CoreBundle\Entity\DDC\DDC;
use TRC\CoreBundle\Entity\DDC\PDDC;
use TRC\CoreBundle\Entity\DDC\EDDC;
use TRC\CoreBundle\Entity\DDC\CDCD;
use TRC\CoreBundle\Form\DDC\CDCDType;
use TRC\CoreBundle\Entity\DDC\EDP;
use TRC\CoreBundle\Entity\DDC\DOCDDC;
class DefaultController extends Controller
{
    public function indexAction()
    {
    	$em = $this->getDoctrine()->getManager();
        $sysgu = $this->get('trc_core.gu');
    	$tdcs = $em->getRepository('TRCCoreBundle:DDC\TDC')
    			->findAll();
    	$tddcs = $em->getRepository('TRCCoreBundle:DDC\TDDC')
    			->findAll();
    	$user = $this->getUser();
    	$utilisateur = $em->getRepository('TRCCoreBundle:Utilisateur')
    					->findOneByCompte($user);
        $fonction = $sysgu->fonction($utilisateur);
    	$acteur = $utilisateur->getActeur();

    	$criteres = array("fonction"=>$fonction);

    	$ddcs = $em->getRepository('TRCCoreBundle:DDC\DDC')
    			->findBy(
    				$criteres,
    				array("id"=>"desc"),null,0);
        return $this->render('TRCDDCBundle:Default:index.html.twig',
        	array("tdcs"=>$tdcs,'tddcs'=>$tddcs,"ddcs"=>$ddcs));
    }

    public function getajaxclientAction(Request $request){

    	$array = array("code"=>1);
    	$em = $this->getDoctrine()->getManager();
        $sysgu = $this->get('trc_core.gu');


        $user = $this->getUser();
        try {
            $utilisateur = $em->getRepository('TRCCoreBundle:Utilisateur')
                        ->findOneByCompte($user);
        
        
        $fonction = $sysgu->fonction($utilisateur);
        $agence = $sysgu->getEntite($fonction->getEntite());
        $array['fonction'] = array(
            'id'=>$fonction->getId(),
            'entite'=>$fonction->getEntite()->getClasse(),
            'profil'=>$fonction->getProfil()->getNom(),
            'agence'=>$agence->getNom()
            );
    	extract($_POST);
    	$array['clients'] = array();
    	$query = $em->createQuery('SELECT c FROM TRCCoreBundle:Client\Client c WHERE c.radical LIKE :radical and c.agence = :agence');
		$query->setParameters(array(
			"radical"=>$radical."%",
            "agence"=>$agence));

		$clients = $query->getResult();
    	foreach ($clients as $key => $value) {
    		$array['clients'][] = array(
    			"radical" => $value->getRadical(),
    			"intitule"=>$value->getIntitule()
    			);
    	}
    	
        } catch (\Exception $e) {
            $array['code'] = -1;
           $array['message'] = $e->getMessage();
        }

    	$response = new Response();
	    $response->setContent(json_encode($array));
	    $response->headers->set('Content-Type', 'application/json');
	    return $response;
    }
    
    public function initAction(Request $request,$code,$type)
    {
    	$em = $this->getDoctrine()->getManager();

    	$tdc = $em->getRepository('TRCCoreBundle:DDC\TDC')
    			->findOneByCode($code);
    	if(is_null($tdc))
    		throw $this->createNotFoundException("Error de code : ".$code);

    	$tddc = $em->getRepository('TRCCoreBundle:DDC\TDDC')
    			->findOneByCode($type);
    	if(is_null($tddc))
    		throw $this->createNotFoundException("Error de code de type : ".$type);
    	
        $sysnoti = $this->get('trc_core.noti');
        $sysddc = $this->get('trc_core.ddc');
        $sysgu = $this->get('trc_core.gu');
        $sysmatricule = $this->get('trc_core.matricule');


        $user = $this->getUser();
        $utilisateur = $em->getRepository('TRCCoreBundle:Utilisateur')
                        ->findOneByCompte($user);
        $fonction = $sysgu->fonction($utilisateur);

    	


    	$ddc = new DDC();
        // Affection du dossier de credit a l'utilisateur
        $ddc->setFonction($fonction);

    	//$ddc->setCdcd(new CDCD());
       
    	$ddc->setTddc($tddc);
    	$ddc->setTdc($tdc);
    	//Affection reference systeme
    	$ddc= $sysmatricule->rsDDC($ddc);
    	

    	$ddc = $sysddc->initDDC($ddc,$user);
    	
    	
    	$edp = new EDP();
        $edp->setMatricule($sysmatricule->matriculeStandard($edp));
        $ddc->setEdp($edp);
    	$em->persist($ddc);
        $em->flush();
        $sysddc->initPhases($ddc);
    	$sysddc->setDocs($ddc);

        //Activer la phase Etude de dossier
        $ddc->setPhaseActuelle($sysddc->activerPhase($ddc,"ETDOS"));

        //Activer l'etat INI
        $ddc->setEtatActuel($sysddc->activerEtat($ddc,$fonction,"INIT"));
    	// Documentation du dossier
    	
    	$em->flush();
    	$sysnoti->notifier(array(
    		"acteur"=>$utilisateur->getActeur(),
    		"titre"=>"Enregistrement de DDC",
    		"contenu"=>" Vous avez crée avec succes un DDC RS : <strong>".$ddc->getRs()."</strong>"
    		));
        return $this->redirect($this->generateUrl('trcddc_def_client',array('rs'=>$ddc->getRs()))); 
    }
    public function defclientAction(Request $request,$rs){

    	$em = $this->getDoctrine()->getManager();
    	$ddc = $em->getRepository('TRCCoreBundle:DDC\DDC')
    			->findOneByRs($rs);
    	if(is_null($ddc))
    		throw $this->createNotFoundException("Error de code : ".$rs);

    	$user = $this->getUser();
    	$utilisateur = $em->getRepository('TRCCoreBundle:Utilisateur')
    					->findOneByCompte($user);
    	$acteur = $utilisateur->getActeur();

    	if($request->isMethod('POST')){
    		
	    	$sysnoti = $this->get('trc_core.noti');
            $sysddc = $this->get('trc_core.ddc');
	    	$sysgu = $this->get('trc_core.gu');
	    	$sysmatricule = $this->get('trc_core.matricule');

            $fonction = $sysgu->fonction($utilisateur);

    		extract($_POST);
    		$client = $em->getRepository('TRCCoreBundle:Client\Client')
    				->findOneByRadical($radical);

    		if(!is_null($client)){
    			//die($radical);
    			$ddc->setClient($client);
    			
    			$ddc->setRc($sysmatricule->rcDDC($ddc));
                
    			$sysnoti->notifier(array(
	    		"acteur"=>$acteur,
	    		"titre"=>"Affection de RC à un DDC ",
	    		"contenu"=>" une RC a été affectée avec succes à votre DDC RS : ".$ddc->getRs()
	    		));
                $phase = $em->getRepository('TRCCoreBundle:DDC\Phase')->findOneByCode('ETDOS');
                $pddc = $em->getRepository('TRCCoreBundle:DDC\PDDC')
                    ->findOneBy(
                        array("phase"=>$phase,"ddc"=>$ddc),array(),1,0);
                //Activer l'etat INI
                
	    		$em->flush();
	    		return $this->redirect($this->generateUrl('trcddc_consulter',array('rc'=>$ddc->getRc())));
    		}else{
    			return $this->redirect($this->generateUrl('trcddc_def_client',array('rs'=>$rs)));
    		}
    		
    	}
    	return $this->render('TRCDDCBundle:Default:defclient.html.twig',
        	array("ddc"=>$ddc));
    }
    public function ddcvoirAction(Request $request,$rc){

    	$em = $this->getDoctrine()->getManager();
    	$ddc = $em->getRepository('TRCCoreBundle:DDC\DDC')
    			->findOneByRc($rc);
    	if(is_null($ddc))
    		throw $this->createNotFoundException("Error de code : ".$rc);
    	
        $sysgu = $this->get('trc_core.gu');
        $sysddc = $this->get('trc_core.ddc');
        $user = $this->getUser();
        $utilisateur = $em->getRepository('TRCCoreBundle:Utilisateur')
                        ->findOneByCompte($user);
        $acteur = $utilisateur->getActeur();

        $fonction = $sysgu->fonction($utilisateur);
        $formv = null;
        if(is_null($ddc->getCdcd())){
            $cdcd = new CDCD();
            $form = $this->get('form.factory')->create(new CDCDType(),$cdcd);
            $formv = $form->createView();
            if($form->handleRequest($request)->isValid() ){

                $em->persist($cdcd);
                $ddc->setCdcd($cdcd);
                $sysddc->desactiverEtat($ddc,"INIT");
                $ddc->setEtatActuel($sysddc->activerEtat($ddc,$fonction,"IDEN"));
                $sysddc->desactiverEtat($ddc,"IDEN");
                $etatETDOS = $sysddc->getDDCEtat($ddc,"ETDOS");
                $ddc->setEtatActuel($sysddc->activerEtat($ddc,$fonction,"COLDOC"));
                $em->flush();
                return $this->redirect($this->generateUrl('trcddc_consulter',array("rc"=>$rc)));
            }
        }
        $documents = $em->getRepository('TRCCoreBundle:DDC\DOCDDC')
                    ->findByDdc($ddc);
    	return $this->render('TRCDDCBundle:Default:consulter.html.twig',
        	array("ddc"=>$ddc,"form"=>$formv,
                "docs"=>$documents));	
    }
    public function decisionCommentaireAction(Request $request,$rc,$phase,$etat){

        $em = $this->getDoctrine()->getManager();
        $ddc = $em->getRepository('TRCCoreBundle:DDC\DDC')
                ->findOneByRc($rc);
        if(is_null($ddc))
            throw $this->createNotFoundException("Error de code : ".$rc);
        $sysddc = $this->get('trc_core.ddc');
        $sysgu = $this->get('trc_core.gu');
        $user = $this->getUser();
        $utilisateur = $em->getRepository('TRCCoreBundle:Utilisateur')
                        ->findOneByCompte($user);
        $acteur = $utilisateur->getActeur();
        $fonction = $sysgu->fonction($utilisateur);
        $pddc = $sysddc->getDDCPhase($ddc,$phase);
        if(is_null($pddc))
            throw $this->createNotFoundException("Error de code : ".$phase);

        $eddcEtat = null;
        $eddcs = $em->getRepository('TRCCoreBundle:DDC\EDDC')
                    ->findByPddc($pddc);
            foreach ($eddcs as $cle => $eddc) {
                if($eddc->getEtat()->getCode() == $etat){
                    $eddcEtat = $eddc;
                }
            }
        if(is_null($eddcEtat))
            throw $this->createNotFoundException("Error de code : ".$etat);
        $decisions = $em->getRepository('TRCCoreBundle:DDC\Decision')
                        ->findAll();
        $arr = array();
        foreach ($decisions as $key => $dec) {
            if(strpos($dec->getEtats(), $eddcEtat->getEtat()->getCode()) > -1 )
                $arr[] = $dec;
        }
        if($request->isMethod('POST')){
            $decision = $_POST['decision'];
            $dd = $em->getRepository('TRCCoreBundle:DDC\Decision')
                        ->find($decision);
            $commentaire = $_POST['commentaire'];
            $eddcEtat->setDecision($dd);
            $eddcEtat->setCommentaire($commentaire);
            if($eddcEtat->getEtat()->getCode() == 'ETDOS'){
                
            }
            die($commentaire." :: ".$decision);
        }
        
        $competence = "";
        if(is_null($eddcEtat->getSystemeText())){

            $competence = "Ce dossier n'est pas de vôtre compétence";
            if($sysddc->estDeCompetence($ddc,$fonction))
            $competence = "Ce dossier est  de vôtre compétence";

            $eddcEtat->setSystemeText($competence);
            $em->flush();
        }else
        $competence = $eddcEtat->getSystemeText();
        
        return $this->render('TRCDDCBundle:Default:decisionCommentaire.html.twig',
            array("ddc"=>$ddc,'phase'=>$pddc,'etat'=>$eddcEtat,'decisions'=>$arr,'competence'=>$competence));
    }
}
