<?php

namespace TRC\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use JMS\SecurityExtraBundle\Annotation\Secure;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Security\Core\SecurityContextInterface;
/*
* @Security("has_role('ROLE_ADMIN')")
*/
class DefaultController extends Controller
{
    public function indexAction()
    {
       //$security = $this->container->get('context.security');
    	$user = $this->getUser();
    	$roles = $user->getRoles();
        /*
    	echo "<pre>";
    	print_r($roles);
    	echo "</pre>";
    	//die('Bienvenue');
        //*/
    	//if($security->isGranted('ROLE_ADMIN'))
    	return $this->redirect($this->generateUrl('trc_admin_homepage',array('class'=>'accueil')));
        return $this->render('TRCCoreBundle:Default:index.html.twig');
    }
}
