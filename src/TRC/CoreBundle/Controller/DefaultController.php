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
    public function archiverAction($classe,$id){

        $em = $this->getDoctrine()->getManager();
        $datas = array();
        try {
            $objet = $em->getRepository('TRCCoreBundle:'.$classe)
                ->find($id);
            $method = "setArchive";
            
            if (!is_null($objet)) {
                if (method_exists($objet,$method )) {
                    $objet->$method(true);
                    $em->flush();
                    $datas['code'] = 1;
                    $datas['message'] = 'Cet élément a été archivé avec succès!';
                }else{
                    $datas['code'] = 0;
                    $datas['message'] = 'Cet élément ne peut être archivé !';
                }
            }else{
                $datas['code'] = -1;
                $datas['message'] = 'Erreur de parametres!!!';
            }
        } catch (Exception $e) {
            $datas['code'] = -2;
            $datas['message'] = $e->getMessage();
        }
        

        $response = new Response();
        $response->setContent(json_encode($datas));
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }

    public function notificationAction($id){

        $em = $this->getDoctrine()->getManager();
        $datas = array();
        try {
            $objet = $em->getRepository('TRCCoreBundle:Notification')
                ->find($id);
            
            if (!is_null($objet)) {
                
                    $objet->setLu(true);
                    $em->flush();
                    $datas['code'] = 1;
                    $datas['message'] = 'Notification recupérée avec succès!';
                    $datas['notification'] = array(
                        'titre'=>$objet->getTitre(),
                        'contenu'=>$objet->getContenu(),
                        'date'=>$objet->getDatenoti()->format('d-m-Y H:i:s')
                        );
            }else{
                $datas['code'] = -1;
                $datas['message'] = 'Erreur de parametres!!!';
            }
        } catch (Exception $e) {
            $datas['code'] = -2;
            $datas['message'] = $e->getMessage();
        }
        

        $response = new Response();
        $response->setContent(json_encode($datas));
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }

    public function resumeAction($id){

        $em = $this->getDoctrine()->getManager();
        $datas = array();
        $user = $this->getUser();
        try {
            $objet = $em->getRepository('TRCCoreBundle:DDC\DDC')
                ->find($id);
            
            if (!is_null($objet)) {
                    
                    $sysddc = $this->get('trc_core.ddc');
                    //$objet->setLu(true);
                    //$em->flush();
                    $datas['code'] = 1;
                    $datas['message'] = 'Notification recupérée avec succès!';
                    $datas['notification'] = array(
                        'titre'=>"DDC :: ".$objet->getRc(),
                        'contenu'=>$sysddc->resume($objet),
                        'date'=>(new \DateTime())->format('d-m-Y H:i:s')
                        );
                    $sysddc->enregistrer(
                        array(
                                'user'=>$user,
                                'type'=>null,
                                'contenu'=>"Consultation du résumé du dossier ".$objet->getRc()
                                )
                            );
            }else{
                $datas['code'] = -1;
                $datas['message'] = 'Erreur de parametres!!!';
            }
        } catch (Exception $e) {
            $datas['code'] = -2;
            $datas['message'] = $e->getMessage();
        }
        

        $response = new Response();
        $response->setContent(json_encode($datas));
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }
}
