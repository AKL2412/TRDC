<?php

namespace TRC\DDCBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

use TRC\CoreBundle\Entity\DDC\DDC;
use TRC\CoreBundle\Entity\DDC\PDDC;
use TRC\CoreBundle\Entity\DDC\EDDC;
use TRC\CoreBundle\Entity\DDC\CDCD;
use TRC\CoreBundle\Entity\DDC\EDP;
use TRC\CoreBundle\Entity\DDC\DOCDDC;
class DefaultController extends Controller
{
    public function indexAction()
    {
    	$em = $this->getDoctrine()->getManager();
    	$tdcs = $em->getRepository('TRCCoreBundle:DDC\TDC')
    			->findAll();
    	$tddcs = $em->getRepository('TRCCoreBundle:DDC\TDDC')
    			->findAll();
    	$user = $this->getUser();
    	$utilisateur = $em->getRepository('TRCCoreBundle:Utilisateur')
    					->findOneByCompte($user);
    	$acteur = $utilisateur->getActeur();
    	$criteres = array("acteur"=>$acteur);
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
    	extract($_POST);
    	$array['clients'] = array();
    	$query = $em->createQuery('SELECT c FROM TRCCoreBundle:Client\Client c WHERE c.radical LIKE :radical ');
		$query->setParameters(array(
			"radical"=>$radical."%"));

		$clients = $query->getResult();
    	foreach ($clients as $key => $value) {
    		$array['clients'][] = array(
    			"radical" => $value->getRadical(),
    			"intitule"=>$value->getIntitule()
    			);
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
    	$user = $this->getUser();
    	$sysnoti = $this->get('trc_core.noti');
    	$sysddc = $this->get('trc_core.ddc');
    	$sysmatricule = $this->get('trc_core.matricule');


    	$ddc = new DDC();
    	$ddc->setCdcd(new CDCD());
    	$ddc->setEdp(new EDP());
    	$ddc->setTddc($tddc);
    	$ddc->setTdc($tdc);
    	//Affection reference systeme
    	$ddc->setRs($sysmatricule->rsDDC($ddc));
    	$user = $this->getUser();
    	$ddc = $sysddc->initDDC($ddc,$user);
    	$utilisateur = $em->getRepository('TRCCoreBundle:Utilisateur')
    					->findOneByCompte($user);
    	$acteur = $utilisateur->getActeur();
    	$ddc->setActeur($acteur);
    	
    	$em->persist($ddc);
    	//Phase de ddc
    	$pddc = new PDDC();
    	$pddc->setDdc($ddc);
    	$pddc->setActeur($acteur);
    	$pddc->setPhase($em->getRepository('TRCCoreBundle:DDC\Phase')->findOneByCode('ETDOS'));
    	$em->persist($pddc);
    	$eddc = new Eddc();
    	$eddc->setPddc($pddc);
    	$eddc->setActeur($acteur);
    	$eddc->setEtat($em->getRepository('TRCCoreBundle:DDC\Etat')->findOneByCode('ETD-INIT'));
    	$em->persist($eddc);


    	// Documentation du dossier
    	$docs = $em->getRepository('TRCCoreBundle:DDC\DOCTDC')
    				->findBy(
    					array("tdc"=>$tdc),
    					array(),null,0);
    	foreach ($docs as $key => $doc) {
    		$docddc = new DOCDDC();
    		$docddc->setNom($doc->getNom());
    		$docddc->setDdc($ddc);
    		$em->persist($docddc);
    	}
    	$em->flush();
    	$sysnoti->notifier(array(
    		"acteur"=>$acteur,
    		"titre"=>"Enregistrement de DDC",
    		"contenu"=>" Vous avez crée avec succes un DDC RS : ".$ddc->getRs()
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
	    	$sysmatricule = $this->get('trc_core.matricule');
    		extract($_POST);
    		$client = $em->getRepository('TRCCoreBundle:Client\Client')
    				->findOneByRadical($radical);
    		if(!is_null($client)){
    			//die($radical);
    			$ddc->setClient($client);
    			
    			$ddc->setRc($sysmatricule->rcDDC($ddc));
    			$sysnoti->notifier(array(
	    		"acteur"=>$acteur,
	    		"titre"=>"Affection du RC à un DDC ",
	    		"contenu"=>" une RC a été affectée avec succes à votre DDC RS : ".$ddc->getRs()
	    		));
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
    	
    	return $this->render('TRCDDCBundle:Default:consulter.html.twig',
        	array("ddc"=>$ddc));	
    }
}
