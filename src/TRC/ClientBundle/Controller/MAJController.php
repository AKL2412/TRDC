<?php

namespace TRC\ClientBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use JMS\SecurityExtraBundle\Annotation\Secure;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Security\Core\SecurityContextInterface;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

use TRC\CoreBundle\Entity\Client\Identite;
use TRC\CoreBundle\Form\Client\IdentiteType;

use TRC\CoreBundle\Entity\Client\Coordonnee;
use TRC\CoreBundle\Form\Client\CoordonneeType;
class MAJController extends Controller
{
    private function verifierClient($radical){

        $em = $this->getDoctrine()->getManager();
        $client = $em->getRepository('TRCCoreBundle:Client\\Client')
                ->findOneByRadical($radical);
        if($client === null)
            throw $this->createNotFoundException($radical." INCONNU");
        return true;
    }
    public function identiteAction(Request $request,$radical){

        $em = $this->getDoctrine()->getManager();
        //if(
            $this->verifierClient($radical);
            //){
            $client = $em->getRepository('TRCCoreBundle:Client\\Client')
                    ->findOneByRadical($radical);
            $identite = new Identite();
            if(!is_null($client->getIdentite())){
                $identite = $client->getIdentite();
            }
           

            $form = $this->get('form.factory')
                    ->create(new IdentiteType(),$identite); 
            if($form->handleRequest($request)->isValid()){

                $em->persist($identite);
                $client->setIdentite($identite);
                $client->setIntitule($identite->getPrenom()." ".strtoupper($identite->getNom()));
                $em->flush();

                $sysjournal = $this->get('trc_core.journal');
                $journalisation = array(
                    'user'=>$this->getUser(),
                    'type'=>null,
                    'contenu'=>"Ajout de l'identité du ".$client->getRadical()
                    );
                $sysjournal->enregistrer($journalisation);

                return $this->redirect($this->generateUrl("trc_client_consulter",array("radical"=>$client->getRadical())));
                //$request->getSession()->getFlashBag()->add('info', 'Etudiant bien enregistrée.');
            }
        return $this->render('TRCClientBundle:MAJ:identite.html.twig',array('client'=>$client,
            "form"=>$form->createView()));
        //}
    }

    public function coordonneesAction(Request $request,$radical){

        $em = $this->getDoctrine()->getManager();
        //if(
            $this->verifierClient($radical);
            //){
            $client = $em->getRepository('TRCCoreBundle:Client\\Client')
                    ->findOneByRadical($radical);
            $coordonnee = new Coordonnee();
            if(!is_null($client->getCoordonnee())){
                $coordonnee = $client->getCoordonnee();
            }
           

            $form = $this->get('form.factory')
                    ->create(new CoordonneeType(),$coordonnee); 
            if($form->handleRequest($request)->isValid()){

                $em->persist($coordonnee);
                $client->setCoordonnee($coordonnee);
                $em->flush();

                $sysjournal = $this->get('trc_core.journal');
                $journalisation = array(
                    'user'=>$this->getUser(),
                    'type'=>null,
                    'contenu'=>"Ajout de Coordonnee du client ".$client->getRadical()
                    );
                $sysjournal->enregistrer($journalisation);

                return $this->redirect($this->generateUrl("trc_client_consulter",array("radical"=>$client->getRadical())));
                //$request->getSession()->getFlashBag()->add('info', 'Etudiant bien enregistrée.');
            }
        return $this->render('TRCClientBundle:MAJ:Coordonnee.html.twig',array('client'=>$client,
            "form"=>$form->createView()));
    }
}
