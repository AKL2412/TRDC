<?php

namespace TRC\DDCBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\Form\FormFactory;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpFoundation\File\File;

use TRC\CoreBundle\Entity\Profil;
use TRC\CoreBundle\Entity\DDC\MEDP;
use TRC\CoreBundle\Entity\DDC\FDDC;
use TRC\CoreBundle\Entity\Agence;
use TRC\CoreBundle\Entity\BOC;
use TRC\CoreBundle\Entity\CIC;
use TRC\CoreBundle\Entity\Zone;
use TRC\CoreBundle\Entity\Entite;
use TRC\CoreBundle\Form\AgenceType;
use TRC\CoreBundle\Form\BOCType;
use TRC\CoreBundle\Form\CICType;
use TRC\CoreBundle\Form\ZoneType;


class DocsController extends Controller
{
	public function ajoutAction(Request $request,$rs){
		$em = $this->get('doctrine')->getManager();
		$ddc = $em->getRepository('TRCCoreBundle:DDC\DDC')
				->findOneByRs($rs);
		if(is_null($ddc))
			throw $this->createNotFoundException("Error ".$rs);
		$docs = $em->getRepository('TRCCoreBundle:DDC\DOCDDC')
					->findByDdc($ddc);
		$fichiers = $em->getRepository('TRCCoreBundle:DDC\FDDC')
					->findByDdc($ddc);
		$sysddc = $this->get('trc_core.ddc');
        $sysgu = $this->get('trc_core.gu');
        
		$user = $this->getUser();
        $utilisateur = $em->getRepository('TRCCoreBundle:Utilisateur')
                        ->findOneByCompte($user);
        $fonction = $sysgu->fonction($utilisateur);
        //$sysddc->activerEtat($ddc,$fonction,"IDEN");
        //$sysddc->activerEtat($ddc,$fonction,"INIT");
        //$sysddc->desactiverEtat($ddc,"IDEN");
        //$sysddc->desactiverEtat($ddc,"INIT");
        
		return $this->render('TRCDDCBundle:Docs:ajout.html.twig',
			array('ddc'=>$ddc,'docs'=>$docs,'fichiers'=>$fichiers));
			
	}
	public function voirAction(Request $request,$rs){
		$em = $this->get('doctrine')->getManager();
		$ddc = $em->getRepository('TRCCoreBundle:DDC\DDC')
				->findOneByRs($rs);
		if(is_null($ddc))
			throw $this->createNotFoundException("Error ".$rs);
		
		$p = 1;
        $nbre = 2;
        $criteres = array("ddc"=>$ddc);
        if( 
            $request->query->get('p')!== null 
            && 
            !empty($request->query->get('p'))
          ){
                $p = $request->query->get('p');
        }
        $id = ($p-1)*$nbre;
        if($id < 0)
            $id = 0;


		$fichiers = $em->getRepository('TRCCoreBundle:DDC\FDDC')
					->findBy(
                        $criteres,
                        array(),
                        $nbre,
                        $id
                        );

		$servicePagination = $this->get('trc_core.pagination');
		$url = $this->generateUrl('trcddc_voir_docs',array("rs"=>$rs));
        $urlRoute = 'trcddc_voir_docs';
        $objet = "DDC\FDDC";
        $pagination = $servicePagination->pagination($objet,$p,$url,$urlRoute,$criteres,$nbre);
		return $this->render('TRCDDCBundle:Docs:voir.html.twig',
			array('ddc'=>$ddc,'fichiers'=>$fichiers,'pagination'=>$pagination));
			
	}
	public function edpAction(Request $request,$rc){
		$em = $this->get('doctrine')->getManager();
		$ddc = $em->getRepository('TRCCoreBundle:DDC\DDC')
				->findOneByRc($rc);
		if(is_null($ddc))
			throw $this->createNotFoundException("Error ".$rs);
		$messages = array();

		$messages = $em->getRepository('TRCCoreBundle:DDC\MEDP')
				->findBy(
					array("edp"=>$ddc->getEdp()),
					array("dateposte"=>"desc"),20,0);
		return $this->render('TRCDDCBundle:Docs:edp.html.twig',
			array('ddc'=>$ddc,'messages'=>$messages));
			
	}
	public function uploadAction(Request $request,$rc,$type){
		$em = $this->get('doctrine')->getManager();
		$code = -1;
		$message = "Erreur de requète";
		$datas = array();
		$datas['alerte'] = 0;
		$sysgu = $this->get('trc_core.gu');
		$syssgf = $this->get('trc_core.sgf');
		$sysnoti = $this->get('trc_core.noti');
		try {
			$user = $this->getUser();
			$ddc = $em->getRepository('TRCCoreBundle:DDC\DDC')
					->findOneByRc($rc);
			if(is_null($ddc))
				throw $this->createNotFoundException("Error ".$rs);
			$utilisateur = $em->getRepository('TRCCoreBundle:Utilisateur')
							->findOneByCompte($user);
			$fonction = $sysgu->fonction($utilisateur);
			if($request->isMethod('POST')){

			if($type == 'edp'){
				$m = $_POST['message'];
				$code = 1;
				$message = "Requète correcte";
				$edp = $ddc->getEdp();
				$medp = new MEDP();
				$medp->setFonction($fonction);
				$medp->setMessage($m);
				$medp->setEdp($edp);
				if(array_key_exists('fichier', $_FILES) && $_FILES['fichier']['tmp_name']){
					$tabUpload = $syssgf->uploadFichierDDC($ddc,$type,$_FILES['fichier']);
					$ff = $tabUpload['fichier'];
					if($tabUpload['code'] == 0 ){
						$datas['alerte'] = 1 ;
						$datas['alerteMessage'] = $tabUpload['message'] ;

					}else{
						$medp->setFichier($ff);
					}
					$message = $ff->detail();
					$datas['fichier'] = "oui";
				}
				$em->persist($medp);
				$em->flush();
				$lien = $this->generateUrl('trcddc_ddc_edp',array('rc'=>$ddc->getRc()));
				 $sysnoti->notifierEdpMembre($ddc,$medp,$lien);
				$baseurl = $request->getScheme() . '://' . $request->getHttpHost() . $request->getBasePath();
				$poste = '<div class="m"><div class="i">'.
                                    '<img src="'.$baseurl.'/'.$utilisateur->getImage().'" class="img-circle"><div class="d">'.
                                        $utilisateur->getPrenom().'<br>'.
                                        $medp->getDateposte()->format('d-m-Y H:i').
                                
                            '</div></div><div class="t">'.
                                $medp->getMessage().'';
                if(!is_null($medp->getFichier())){
                    $fichierLink = $baseurl.'/'.$medp->getFichier()->getChemin();
                	$poste .= '<br> <a href="'.$fichierLink.'">'.$medp->getFichier()->getNomoriginal().'</a>';
                	if($sysgu->aPoste($medp,$user)){
                		$poste .= '<a target="blank" href="#" class="supp-fichier text-danger"><i class="fa-trash-o fa"></i></a>';
                	}
                }

                $poste .= '</div>';
                $datas['poste'] = $poste;

            }elseif ($type=='doc') {
            	
            	$documentId = $_POST['document'];
            	$nomFichier = $_POST['nomFichier'];
            	$fddc = new FDDC();
            	$fddc->setDdc($ddc);
            	$fddc->setFonction($fonction);
            	$docddc = $em->getRepository('TRCCoreBundle:DDC\DOCDDC')
            				->find($documentId);
            	if(!is_null($docddc)){
            		$fddc->setDocddc($docddc);
            		$docddc->setCharge(true);
            	}
            	$tabUpload = $syssgf->uploadFichierDDC($ddc,$type,$_FILES['fichier'],$nomFichier);
				$ff = $tabUpload['fichier'];
				
				if($tabUpload['code'] == 0 ){
						$datas['alerte'] = 1 ;
						$datas['alerteMessage'] = $tabUpload['message'] ;

				}else{
						$fddc->setFichier($ff);
						$em->persist($fddc);
						$lien = $this->generateUrl('trcddc_ajout_docs',array('rs'=>$ddc->getRs()));
						 $sysnoti->notifierDDCMembre($ddc,$fddc,$lien);
						 $code = 1;
						 $message ='<i class="fa-check fa"></i>'.$ff->getNom()." a été uploadé avec succès !";
				}



				//Fin doc

            }
		}
		} catch (\Exception $e) {
			$message = $e->getMessage();
		}
		

		
		$em->flush();
    		//print_r($_POST);
    		//print_r($_FILES);
		$datas['code'] = $code;
		$datas['message']=$message;
	
		$response = new Response();
        $response->setContent(json_encode($datas));
        $response->headers->set('Content-Type', 'application/json');
        return $response;
			
	}

	public function terminerEtapeAction(Request $request,$rc,$etape,$codeEtape){

		$em = $this->get('doctrine')->getManager();
		$code = -1;
		$message = "Erreur de requête";
		$datas = array();
		$sysgu = $this->get('trc_core.gu');
		$sysddc = $this->get('trc_core.ddc');
		$sysnoti = $this->get('trc_core.noti');
		try {
			$user = $this->getUser();
			$ddc = $em->getRepository('TRCCoreBundle:DDC\DDC')
					->findOneByRc($rc);
			if(is_null($ddc))
				throw $this->createNotFoundException("Error ".$rs);
			$utilisateur = $em->getRepository('TRCCoreBundle:Utilisateur')
							->findOneByCompte($user);
			$fonction = $sysgu->fonction($utilisateur);

			if($request->isMethod('POST')){
				$message = "Bonne requête";
				if($etape == 'etat'){
					$etat = $sysddc->getDDCEtat($ddc,$codeEtape);
					if($etat->getEtat()->getCode() == 'COLDOC'){

						$tabCharge = $sysddc->fichiersCharges($ddc);
						$noncharges = $tabCharge['noncharges'];
						if($noncharges == 0){


        					$sysddc->desactiverEtat($ddc,$etat->getEtat()->getCode());
        					$ddc->setEtatActuel($sysddc->activerEtat($ddc,$fonction,"ETDOS"));
        					//$sysddc->desactiverPhase($ddc,"ETDOS");
        					//$sysddc->activerPhase($ddc,"VCA");

							$classe = $sysddc->getClassEtatDDC($etat);
							$message =$tabCharge['message'];
							$message .='<p class="text-danger"> la collecte de document sera statuée [<em><b>terminer</b></em>]. Vous pouvez à tout moment venir ajouter des documents.<br> Vous pouvez maintenaint donner votre décision et le commentaire de votre analyse de risques <br>';
							$lien = '<a href="'.$this->generateUrl('trcddc_decision_commentaire_ddc',array('rc'=>$ddc->getRc(),'phase'=>'ETDOS','etat'=>'ETDOS')).'">Décision et commentaire</a>';
							$message .= $lien;
							$em->flush();
						}else{
							$message =$tabCharge['message'];
						}
						
					}
					
				}else{

				}
			}else{
				$message = "Erreur de requête";

			}
			
		} catch (\Exception $e) {
			$message = $e->getMessage();	
		}

		$em->flush();
    		//print_r($_POST);
    		//print_r($_FILES);
		$datas['code'] = $code;
		$datas['message']=$message;
	
		$response = new Response();
        $response->setContent(json_encode($datas));
        $response->headers->set('Content-Type', 'application/json');
        return $response;
	}
}	