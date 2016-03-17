<?php

namespace TRC\ClientBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use TRC\CoreBundle\Entity\Client\Client;
use TRC\CoreBundle\Form\Client\ClientType;
class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {
    	$em = $this->getDoctrine()->getManager();
    	$client = new Client();
    	 $form = $this->get('form.factory')
        ->create(new ClientType(),$client);

        if($form->handleRequest($request)->isValid()){

        	$em->persist($client);
        	$em->flush();

        	$sysjournal = $this->get('trc_core.journal');
        	$journalisation = array(
                'user'=>$this->getUser(),
                'type'=>null,
                'contenu'=>"Ajout du client ".$client->getRadical()
                );
        	$sysjournal->enregistrer($journalisation);

        	return $this->redirect($this->generateUrl("trc_client_consulter",array("radical"=>$client->getRadical())));
        	//$request->getSession()->getFlashBag()->add('info', 'Etudiant bien enregistrée.');
        }
        return $this->render('TRCClientBundle:Default:index.html.twig',
        	array("form"=>$form->createView()));
    }

    public function consulterAction($radical, Request $request){
    	$em = $this->getDoctrine()->getManager();

    	$client = $em->getRepository('TRCCoreBundle:Client\\Client')
    		->findOneByRadical($radical);

    	if($client === null){

    		throw $this->createNotFoundException('Radical inconnu');
    	}

    	return $this->render('TRCClientBundle:Default:consulter.html.twig',
        	array("client"=>$client));
    }

    public function rechercheAction(Request $request){

    	$array = array("code"=>-1);
    	$array["method"] = "GET";
    	if($request->isMethod('POST')){
    		$array = array("code"=>0,
    						"method"=>"POST",
    						"lien"=>"null");
    		extract($_POST);
    		$em = $this->getDoctrine()->getManager();
    		$array['radical'] = $radical;
    		$client = $em->getRepository('TRCCoreBundle:Client\\Client')
    				->findOneByRadical($radical);
    		if($client !== null){
    			$array['code'] = 1;
    			$array['lien'] = $this->generateUrl('trc_client_consulter',array('radical'=>$radical));

    		}
    	}else{

    		extract($_GET);
    		$em = $this->getDoctrine()->getManager();
    		$array['radical'] = $radical;
    		$client = $em->getRepository('TRCCoreBundle:Client\\Client')
    				->findOneByRadical($radical);
    		if($client !== null){
    			return $this->redirect($this->generateUrl('trc_client_consulter',array('radical'=>$radical)));

    		}else{
    			$request->getSession()->getFlashBag()->add('erreur', $radical.' ne correspond à aucun client');
    			return $this->redirect($this->generateUrl('trc_core_error'));
    		}
    	}

    	$response = new Response();
	    $response->setContent(json_encode($array));
	    $response->headers->set('Content-Type', 'application/json');
	    return $response;
    }
}
