<?php

namespace TRC\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('TRCUserBundle:Default:index.html.twig');
    }
}
