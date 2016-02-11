<?php

namespace TRC\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;




class UtilisateursController extends Controller
{
    public function utilisateursAction()
    {
        return $this->render('TRCAdminBundle:Utilisateurs:utilisateurs.html.twig');
    }
}
