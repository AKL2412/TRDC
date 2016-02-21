<?php

namespace TRC\AdminBundle\Controller;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\Form\Forms;
use TRC\CoreBundle\Entity\Profil;
use TRC\CoreBundle\Entity\Agence;
use TRC\CoreBundle\Entity\BOC;
use TRC\CoreBundle\Entity\Utilisateur;
use TRC\CoreBundle\Form\UtilisateurType;

class UtilisateursController extends Controller
{

    public function utilisateursAction()
    {
    	$sysmatricule = $this->get('trc_core.matricule');
    	$sysjournal = $this->get('trc_core.journal');
    	$em = $this->getDoctrine()->getManager();
        return $this->render('TRCAdminBundle:Utilisateurs:utilisateurs.html.twig');
    }
    public function utilisateursAjouterAction(Request $request,$matricule = null){

        $em = $this->getDoctrine()->getManager();

        $utilisateur = new Utilisateur();
        //$formFactory = Forms::createFormFactory();
        //$form = $this->get('form.factory')->create(new UtilisateurType(),$utilisateur);
        $form = $this->createFormBuilder($utilisateur)
            ->add('nom',TextType::class)
            ->add('cin',TextType::class)
            ->add('matricule',TextType::class)
            ->add('prenom',TextType::class)
            ->add('email',EmailType::class)
            ->add('image',FileType::class)
            ->add('adresse',TextareaType::class)
            ->add('save', SubmitType::class, array('label' => 'Sauvegarder',
            'attr'=>array('class'=>'btn btn-primary')))
        ->getForm();
        return $this->render('TRCAdminBundle:Utilisateurs:utilisateursAjouter.html.twig',
            array(
                'form'=>$form->createView(),
                'objet'=>$utilisateur
                ));
    }
}
