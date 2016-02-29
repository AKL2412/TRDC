<?php

namespace TRC\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AffichageController extends Controller
{
    public function headerAction()
    {
        return $this->render('TRCCoreBundle:Affichage:header.html.twig');
    }
    public function utilisateurAction(\TRC\CoreBundle\Entity\Utilisateur $utilisateur)
    {
        $em = $this->getDoctrine()->getManager();
        $fonctions = $em->getRepository('TRCCoreBundle:Fonction')
                    ->findBy(
                        array('acteur'=>$utilisateur->getActeur()),
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
        return $this->render('TRCCoreBundle:Affichage:connecte.html.twig');
    }
    public function paginationAction($pagination)
    {
        return $this->render('TRCCoreBundle:Affichage:pagination.html.twig', array('pagination' => $pagination));
    }
}