<?php

namespace TRC\ClientBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use TRC\CoreBundle\Entity\Client\Client;
use TRC\CoreBundle\Form\Client\ClientType;


use TRC\CoreBundle\Entity\Client\EDCC;
use TRC\CoreBundle\Form\Client\EDCCType;
class DefaultController extends Controller
{

    private function verifierClient($radical){

        $em = $this->getDoctrine()->getManager();
        $client = $em->getRepository('TRCCoreBundle:Client\\Client')
                ->findOneByRadical($radical);
        if($client === null)
            throw $this->createNotFoundException($radical." INCONNU");
        return true;
    }
    public function indexAction(Request $request)
    {
    	$em = $this->getDoctrine()->getManager();
    	$client = new Client();
    	 $form = $this->get('form.factory')
        ->create(new ClientType(),$client);
        $sysnoti = $this->get('trc_core.noti');
        $sysddc = $this->get('trc_core.ddc');
        $sysgu = $this->get('trc_core.gu');
        $sysmatricule = $this->get('trc_core.matricule');


        $user = $this->getUser();
        $utilisateur = $em->getRepository('TRCCoreBundle:Utilisateur')
                        ->findOneByCompte($user);
        $fonction = $sysgu->fonction($utilisateur);

        if($form->handleRequest($request)->isValid()){
            try {
                $em->persist($client);
                $em->flush();
            } catch (\Exception $e) {
                
                $request->getSession()->getFlashBag()->add('erreur',$e->getMessage());
                return $this->redirect($this->generateUrl('trc_core_error'));
            }
        	

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
        $comptes = $em->getRepository('TRCCoreBundle:Client\EDCC')
                        ->findByClient($client);
    	return $this->render('TRCClientBundle:Default:consulter.html.twig',
        	array("client"=>$client,"comptes"=>$comptes));
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

    public function voirrubriqueAction($radical,$rubrique){

        $em = $this->getDoctrine()->getManager();
        $client = $em->getRepository('TRCCoreBundle:Client\\Client')
            ->findOneByRadical($radical);

        if($client === null){

            throw $this->createNotFoundException('Radical inconnu');
        }
        $comptes = array();
        $engagements = array();
        if ($rubrique == 'comptes') {
            $comptes = $em->getRepository('TRCCoreBundle:Client\EDCC')
                        ->findByClient($client);
        }elseif ($rubrique == 'engagements') {
            $engagements = $em->getRepository('TRCCoreBundle:DDC\DDC')
                        ->findBy(
                            array('client'=>$client),
                            array()
                            ,null,0);
        }
        return $this->render('TRCClientBundle:Default:voirrubrique.html.twig',
            array("client"=>$client,"rubrique"=>$rubrique,
                "comptes"=>$comptes,
                "engagements"=>$engagements));
    }
    public function ajouterCompteAction(Request $request, $radical,$id=null){
        $em = $this->getDoctrine()->getManager();
        //if(
            $this->verifierClient($radical);
            //){
            $client = $em->getRepository('TRCCoreBundle:Client\\Client')
                    ->findOneByRadical($radical);
            $edcc = new EDCC();
            if(!is_null($id)){
                $edcc = $em->getRepository('TRCCoreBundle:Client\EDCC')
                    ->find($id);
                if($edcc === null)
                    throw $this->createNotFoundException($radical." INCONNU");
            }
           

            $form = $this->get('form.factory')
                    ->create(new EDCCType(),$edcc); 
            if($form->handleRequest($request)->isValid()){

                $edcc->setClient($client);
                $em->persist($edcc);
                
                $em->flush();

                $sysjournal = $this->get('trc_core.journal');
                $journalisation = array(
                    'user'=>$this->getUser(),
                    'type'=>null,
                    'contenu'=>"Ajout d'un compte  du client ".$client->getRadical()." numero de compte : ".$edcc->getNumeroCompte()
                    );
                 if(!is_null($radical))
                    $journalisation['contenu'] = "Modification d'un compte  du client ".$client->getRadical()." numero de compte : ".$edcc->getNumeroCompte();
                $sysjournal->enregistrer($journalisation);

                return $this->redirect($this->generateUrl("trc_client_consulter",array("radical"=>$client->getRadical())));
                //$request->getSession()->getFlashBag()->add('info', 'Etudiant bien enregistrée.');
            }
        return $this->render('TRCClientBundle:Default:comptes.html.twig',array('client'=>$client,
            "form"=>$form->createView()));
    }
}
