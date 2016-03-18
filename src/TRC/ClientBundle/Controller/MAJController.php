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

use TRC\CoreBundle\Entity\Client\Employeur;
use TRC\CoreBundle\Form\Client\EmployeurType;

use TRC\CoreBundle\Entity\Client\Profession;
use TRC\CoreBundle\Form\Client\ProfessionType;

use TRC\CoreBundle\Entity\Client\Revenu;
use TRC\CoreBundle\Form\Client\RevenuType;

use TRC\CoreBundle\Entity\Client\Logement;
use TRC\CoreBundle\Form\Client\LogementType;

use TRC\CoreBundle\Entity\Client\PAC;
use TRC\CoreBundle\Form\Client\PACType;
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
                 if(!is_null($radical))
                    $journalisation['contenu'] = "Modification de l'identité du client ".$client->getRadical();
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
                 if(!is_null($radical))
                    $journalisation['contenu'] = "Modification de coorconnées du client ".$client->getRadical();
                $sysjournal->enregistrer($journalisation);

                return $this->redirect($this->generateUrl("trc_client_consulter",array("radical"=>$client->getRadical())));
                //$request->getSession()->getFlashBag()->add('info', 'Etudiant bien enregistrée.');
            }
        return $this->render('TRCClientBundle:MAJ:Coordonnee.html.twig',array('client'=>$client,
            "form"=>$form->createView()));
    }

    public function employeurAction(Request $request,$radical){

        $em = $this->getDoctrine()->getManager();
        //if(
            $this->verifierClient($radical);
            //){
            $client = $em->getRepository('TRCCoreBundle:Client\\Client')
                    ->findOneByRadical($radical);
            $employeur = new Employeur();
            if(!is_null($client->getEmployeur())){
                $employeur = $client->getEmployeur();
            }
           

            $form = $this->get('form.factory')
                    ->create(new EmployeurType(),$employeur); 
            if($form->handleRequest($request)->isValid()){

                $em->persist($employeur);
                $client->setEmployeur($employeur);
                $em->flush();

                $sysjournal = $this->get('trc_core.journal');
                $journalisation = array(
                    'user'=>$this->getUser(),
                    'type'=>null,
                    'contenu'=>"Ajout de l'employeur du client ".$client->getRadical()
                    );
                if(!is_null($radical))
                    $journalisation['contenu'] = "Modification de l'employeur du client ".$client->getRadical();
                $sysjournal->enregistrer($journalisation);

                return $this->redirect($this->generateUrl("trc_client_consulter",array("radical"=>$client->getRadical())));
                //$request->getSession()->getFlashBag()->add('info', 'Etudiant bien enregistrée.');
            }
        return $this->render('TRCClientBundle:MAJ:employeur.html.twig',array('client'=>$client,
            "form"=>$form->createView()));
    }

    public function professionAction(Request $request,$radical){

        $em = $this->getDoctrine()->getManager();
        //if(
            $this->verifierClient($radical);
            //){
            $client = $em->getRepository('TRCCoreBundle:Client\\Client')
                    ->findOneByRadical($radical);
            $profession = new Profession();
            if(!is_null($client->getProfession())){
                $profession = $client->getProfession();
            }
           

            $form = $this->get('form.factory')
                    ->create(new ProfessionType(),$profession); 
            if($form->handleRequest($request)->isValid()){

                $em->persist($profession);
                $client->setProfession($profession);
                $em->flush();

                $sysjournal = $this->get('trc_core.journal');
                $journalisation = array(
                    'user'=>$this->getUser(),
                    'type'=>null,
                    'contenu'=>"Ajout de la profession du client ".$client->getRadical()
                    );
                if(!is_null($radical))
                    $journalisation['contenu'] = "Modification de la profession du client ".$client->getRadical();
                $sysjournal->enregistrer($journalisation);

                return $this->redirect($this->generateUrl("trc_client_consulter",array("radical"=>$client->getRadical())));
                //$request->getSession()->getFlashBag()->add('info', 'Etudiant bien enregistrée.');
            }
        return $this->render('TRCClientBundle:MAJ:profession.html.twig',array('client'=>$client,
            "form"=>$form->createView()));
    }

    public function revenuAction(Request $request,$radical){

        $em = $this->getDoctrine()->getManager();
        //if(
            $this->verifierClient($radical);
            //){
            $client = $em->getRepository('TRCCoreBundle:Client\\Client')
                    ->findOneByRadical($radical);
            $revenu = new Revenu();
            if(!is_null($client->getRevenu())){
                $revenu = $client->getRevenu();
            }
           

            $form = $this->get('form.factory')
                    ->create(new RevenuType(),$revenu); 
            if($form->handleRequest($request)->isValid()){

                $em->persist($revenu);
                $client->setRevenu($revenu);
                $em->flush();

                $sysjournal = $this->get('trc_core.journal');
                $journalisation = array(
                    'user'=>$this->getUser(),
                    'type'=>null,
                    'contenu'=>"Ajout du revenu du client ".$client->getRadical()
                    );
                if(!is_null($radical))
                    $journalisation['contenu'] = "Modification du revenu du client ".$client->getRadical();
                $sysjournal->enregistrer($journalisation);

                return $this->redirect($this->generateUrl("trc_client_consulter",array("radical"=>$client->getRadical())));
                //$request->getSession()->getFlashBag()->add('info', 'Etudiant bien enregistrée.');
            }
        return $this->render('TRCClientBundle:MAJ:revenu.html.twig',array('client'=>$client,
            "form"=>$form->createView()));
    }
    public function logementAction(Request $request,$radical){

        $em = $this->getDoctrine()->getManager();
        //if(
            $this->verifierClient($radical);
            //){
            $client = $em->getRepository('TRCCoreBundle:Client\\Client')
                    ->findOneByRadical($radical);
            $Logement = new Logement();
            if(!is_null($client->getLogement())){
                $Logement = $client->getLogement();
            }
           

            $form = $this->get('form.factory')
                    ->create(new LogementType(),$Logement); 
            if($form->handleRequest($request)->isValid()){

                $em->persist($Logement);
                $client->setLogement($Logement);
                $em->flush();

                $sysjournal = $this->get('trc_core.journal');
                $journalisation = array(
                    'user'=>$this->getUser(),
                    'type'=>null,
                    'contenu'=>"Ajout du Logement du client ".$client->getRadical()
                    );
                if(!is_null($radical))
                    $journalisation['contenu'] = "Modification du Logement du client ".$client->getRadical();
                $sysjournal->enregistrer($journalisation);

                return $this->redirect($this->generateUrl("trc_client_consulter",array("radical"=>$client->getRadical())));
                //$request->getSession()->getFlashBag()->add('info', 'Etudiant bien enregistrée.');
            }
        return $this->render('TRCClientBundle:MAJ:Logement.html.twig',array('client'=>$client,
            "form"=>$form->createView()));
    }

    public function pacAction(Request $request,$radical){

        $em = $this->getDoctrine()->getManager();
        //if(
            $this->verifierClient($radical);
            //){
            $client = $em->getRepository('TRCCoreBundle:Client\\Client')
                    ->findOneByRadical($radical);
            $PAC = new PAC();
            if(!is_null($client->getPAC())){
                $PAC = $client->getPAC();
            }
           

            $form = $this->get('form.factory')
                    ->create(new PACType(),$PAC); 
            if($form->handleRequest($request)->isValid()){

                $em->persist($PAC);
                $client->setPAC($PAC);
                $em->flush();

                $sysjournal = $this->get('trc_core.journal');
                $journalisation = array(
                    'user'=>$this->getUser(),
                    'type'=>null,
                    'contenu'=>"Ajout du PAC du client ".$client->getRadical()
                    );
                if(!is_null($radical))
                    $journalisation['contenu'] = "Modification du PAC du client ".$client->getRadical();
                $sysjournal->enregistrer($journalisation);

                return $this->redirect($this->generateUrl("trc_client_consulter",array("radical"=>$client->getRadical())));
                //$request->getSession()->getFlashBag()->add('info', 'Etudiant bien enregistrée.');
            }
        return $this->render('TRCClientBundle:MAJ:PAC.html.twig',array('client'=>$client,
            "form"=>$form->createView()));
    }
}
