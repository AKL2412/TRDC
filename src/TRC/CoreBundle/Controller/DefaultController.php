<?php

namespace TRC\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use JMS\SecurityExtraBundle\Annotation\Secure;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Security\Core\SecurityContextInterface;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function logoutAction(){

        $em = $this->getDoctrine()->getManager();
        $session = new Session();

        $log = $em->getRepository('TRCCoreBundle:Log')
                    ->find($session->get('log'));
        if($log !== null){
            $log->setLogOutAt(new \DateTime());
        }
        $em->flush();
        return $this->redirect($this->generateUrl('fos_user_security_logout'));
    }

    public function indexAction()
    {
       //$security = $this->container->get('context.security');
    	$user = $this->getUser();
    	$roles = $user->getRoles();
        /*
    	echo "<pre>";
    	print_r($roles);
    	echo "</pre>";
    	die('Bienvenue');
        //*/
    	//if($security->isGranted('ROLE_ADMIN'))
    	//return $this->redirect($this->generateUrl('trc_admin_homepage',array('class'=>'accueil')));
        return $this->render('TRCCoreBundle:Default:index.html.twig');
    }

    public function errorAction(Request $request){

        return $this->render('TRCCoreBundle:Default:error.html.twig');
    }
}
