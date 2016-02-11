<?php

namespace TRC\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AffichageController extends Controller
{
    public function headerAction()
    {
        return $this->render('TRCCoreBundle:Affichage:header.html.twig');
    }

    public function menuAction()
    {
        return $this->render('TRCCoreBundle:Affichage:menu.html.twig');
    }
    public function connecteAction()
    {
        return $this->render('TRCCoreBundle:Affichage:connecte.html.twig');
    }
}