<?php

namespace TRC\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use TRC\CoreBundle\Entity\DDP;
use TRC\CoreBundle\Form\DDPType;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
class AffichageController extends Controller
{
    public function headerAction()
    {
        return $this->render('TRCCoreBundle:Affichage:header.html.twig');
    }
    public function edpddcAction(Request $request,\TRC\CoreBundle\Entity\DDC\DDC  $ddc)
    {
        return $this->render('TRCCoreBundle:Affichage:edpddc.html.twig',
            array(
                'ddc'=>$ddc,));

    }
    public function utilisateurAction(Request $request,\TRC\CoreBundle\Entity\Utilisateur $utilisateur)
    {
        $em = $this->getDoctrine()->getManager();
        $fonctions = $em->getRepository('TRCCoreBundle:Fonction')
                    ->findBy(
                        array('acteur'=>$utilisateur->getActeur(),
                            'archive'=>false),
                        array('dateaffectation'=>'DESC'),
                        null,
                        0);
        $fa = null;
        foreach ($fonctions as $key => $value) {
            if($value->getActive() && $fa == null){
                $fa = $value;
                break;
            }
        }

        return $this->render('TRCCoreBundle:Affichage:utilisateur.html.twig',
            array(
                'utilisateur'=>$utilisateur,
                'fonctions'=>$fonctions,
                'poste'=>$fa));
    }

    public function menuAction()
    {
        return $this->render('TRCCoreBundle:Affichage:menu.html.twig');
    }
    public function connecteAction()
    {
        $em = $this->getDoctrine()->getManager();
        $user = $this->getUser();
        $utilisateur = $em->getRepository('TRCCoreBundle:Utilisateur')
                        ->findOneByCompte($user);
        $acteur = $utilisateur->getActeur();
        $notifications = $em->getRepository('TRCCoreBundle:Notification')
            ->findBy(
                array('acteur'=>$acteur,
                    'lu'=>false),
                array('datenoti'=>"desc"),null,0);
        return $this->render('TRCCoreBundle:Affichage:connecte.html.twig',
            array('notifications'=>$notifications));
    }
    public function paginationAction($pagination,$ajax = false,$containerId = null)
    {
        return $this->render('TRCCoreBundle:Affichage:pagination.html.twig', array('pagination' => $pagination,'ajax'=>$ajax,"containerId"=>$containerId));
    }

    public function ddpAction($poste)
    {
        $ddps = array();
        if($poste->getProfil()->getDdp()){
            $em = $this->getDoctrine()->getManager();
            $ddps = $em->getRepository('TRCCoreBundle:DDP')
                ->findBy(
                    array("fonction"=>$poste),
                    array("id"=>"desc"),
                    null,0);

        }
        return $this->render('TRCCoreBundle:Affichage:ddp.html.twig', array('profil' => $poste->getProfil(),
            'ddps'=>$ddps));
    }
}