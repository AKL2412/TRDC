<?php

namespace TRC\AdminBundle\Controller;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Form\Forms;
use TRC\CoreBundle\Entity\Profil;
use TRC\CoreBundle\Entity\Agence;
use TRC\CoreBundle\Entity\BOC;
use TRC\CoreBundle\Entity\Utilisateur;
use TRC\CoreBundle\Form\UtilisateurType;

class UtilisateursController extends Controller
{

    public function utilisateursAction(Request $request)
    {
    	$sysmatricule = $this->get('trc_core.matricule');
    	$sysjournal = $this->get('trc_core.journal');
    	$em = $this->getDoctrine()->getManager();

        $p = 1;
        $nbre = 3;
        $criteres = array();
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
        $utilisateurs = $em->getRepository('TRCCoreBundle:Utilisateur')
                    ->findBy(
                        $criteres,
                        array(),
                        $nbre,
                        $id
                        );
        $servicePagination = $this->get('trc_core.pagination');

        $sup = "groupe=rien";
        $objet = 'Utilisateur';
        $url = $this->generateUrl('trc_admin_utilisateurs');
        $urlRoute = 'trc_admin_utilisateurs';
        $pagination = $servicePagination->pagination($objet,$p,$url,$urlRoute,$criteres,$nbre);
        return $this->render('TRCAdminBundle:Utilisateurs:utilisateurs.html.twig',
            array(
                'utilisateurs'=>$utilisateurs,
                'pagination'=>$pagination
                ));
    }
    public function utilisateursVoirAction(Request $request, $matricule){

        $em = $this->getDoctrine()->getManager();
        $utilisateur = $em->getRepository('TRCCoreBundle:Utilisateur')
                        ->findOneByMatricule($matricule);
        if($utilisateur === null)
            throw new NotFoundHttpException("Error [$matricule] INCONNU");
            
        return $this->render('TRCAdminBundle:Utilisateurs:utilisateursVoir.html.twig',array('utilisateur'=>$utilisateur));
    }
    public function utilisateursAjouterAction(Request $request,$matricule = null){

        $em = $this->getDoctrine()->getManager();
        $gu = $this->get('trc_core.gu');
        $utilisateur = new Utilisateur();
        /*
        echo "<pre>";
        print_r($gu->images('Utilisateurs/118152/images/'));
        echo "</pre>";
        die('');
        //*/
        $imageFile = $utilisateur->getImage();
        $formFactory = Forms::createFormFactory();
        $form = $this->get('form.factory')->create(new UtilisateurType(),$utilisateur);
        if($form->handleRequest($request)->isValid()){

            if($utilisateur->getImage() == null)  $utilisateur->setImage($imageFile);
            else{
                $file = $form['image']->getData();
                $utilisateur->setImage($file);
                
            }
            $utilisateur = $gu->creerUtilisateur($utilisateur,$this->getUser());
            $em->persist($utilisateur);
            $em->flush();

            return $this->redirect($this->generateUrl('trc_admin_utilisateurs_voir',array('matricule'=>$utilisateur->getMatricule())));
        }
        return $this->render('TRCAdminBundle:Utilisateurs:utilisateursAjouter.html.twig',
            array(
                'form'=>$form->createView(),
                'objet'=>$utilisateur
                ));
    }
}
