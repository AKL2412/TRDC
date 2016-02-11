<?php

namespace TRC\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;




class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('TRCAdminBundle:Default:index.html.twig');
    }
}
