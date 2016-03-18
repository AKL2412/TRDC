<?php

namespace TRC\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

use TRC\CoreBundle\Entity\DDC\DOCTDC;
use TRC\CoreBundle\Form\DDC\DOCTDCType;



class CreditsController extends Controller
{
    public function creditsAction(Request $request)
    {
    	$em = $this->getDoctrine()->getManager();
    	$tdcs = $em->getRepository('TRCCoreBundle:DDC\TDC')
    			->findAll();
        return $this->render('TRCAdminBundle:Credits:credits.html.twig',
        	array('tdcs'=>$tdcs));
    }
    public function creditsvoirAction(Request $request,$code){
    	$em = $this->getDoctrine()->getManager();
    	$tdc = $em->getRepository('TRCCoreBundle:DDC\TDC')
    			->findOneByCode($code);
    	if(is_null($tdc))
    		throw $this->createNotFoundException("Error de code : ".$code);

    	$docs = $em->getRepository('TRCCoreBundle:DDC\DOCTDC')
    				->findBy(
    					array("tdc"=>$tdc),
    					array(),null,0);
    	$doctdc = new DOCTDC();
    	$doctdc->setTdc($tdc);
    	$form = $this->get('form.factory')->create(new DOCTDCType(),$doctdc);

    	if($form->handleRequest($request)->isValid()){
    		$em->persist($doctdc);
    		$em->flush();
    		return $this->redirect($this->generateUrl('trc_admin_tdc_voir',array('code'=>$code)));
    	}
    	return $this->render('TRCAdminBundle:Credits:creditsvoir.html.twig',
        	array('tdc'=>$tdc,"docs"=>$docs,"form"=>$form->createView()));	

    }
}