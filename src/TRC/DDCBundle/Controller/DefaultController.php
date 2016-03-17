<?php

namespace TRC\DDCBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('TRCDDCBundle:Default:index.html.twig');
    }
}
