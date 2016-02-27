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
use TRC\CoreBundle\Form\ProfilType;

class ProfilsController extends Controller
{
	public function ajouterAction(Request $request){
		$em = $this->getDoctrine()->getManager();
		$sysmatricule = $this->get('trc_core.matricule');

		$profil = new Profil();
		$formFactory = Forms::createFormFactory();
        $form = $this->get('form.factory')->create(new ProfilType(),$profil);
        if($form->handleRequest($request)->isValid()){

        	$profil->setMatricule($sysmatricule->matriculeStandard($profil));
        	$em->persist($profil);
        	$em->flush();
        	return $this->redirect($this->generateUrl('trc_admin_profils'));
        }
        $p = 1;
        $nbre = 5;
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
        $profils = $em->getRepository('TRCCoreBundle:Profil')
                    ->findBy(
                        $criteres,
                        array(),
                        $nbre,
                        $id
                        );
        $servicePagination = $this->get('trc_core.pagination');

        $objet = 'Profil';
        $url = $this->generateUrl('trc_admin_profils');
        $urlRoute = 'trc_admin_profils';
        $pagination = $servicePagination->pagination($objet,$p,$url,$urlRoute,$criteres,$nbre);
		return $this->render('TRCAdminBundle:Profils:ajouter.html.twig',
            array(
            		'form'=>$form->createView(),
            		'profils'=>$profils,
            		'pagination'=>$pagination
                ));
	}

	public function voirAction($matricule){
		$em = $this->getDoctrine()->getManager();

		$profil = $em->getRepository('TRCCoreBundle:Profil')
			->findOneByMatricule($matricule);
		if(!$profil)
			throw $this->createNotFoundException("Erreur $matricule");

		return $this->render('TRCAdminBundle:Profils:voir.html.twig',
            array(
            		'profil'=>$profil
                ));
	}
}