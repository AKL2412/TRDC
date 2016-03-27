<?php 
namespace  TRC\CoreBundle\Systemes\Twig;

use Doctrine\Common\Persistence\ObjectManager;
//use Symfony\Bundle\TwigBundle\DependencyInjection\TwigExtension;
use TRC\CoreBundle\Systemes\General\GU;
class TwigExtension extends \Twig_Extension{

	protected $em;
	protected $gu;

	public function __construct(ObjectManager $em,\TRC\CoreBundle\Systemes\General\GU $gu){
	   
	   $this->em = $em;
	   $this->gu = $gu;

	}

	public function getFunctions()
	{
		return array(
			'checkIfSpam' => new \Twig_Function_Method($this, 'isSpam'),
			'getClass' => new \Twig_Function_Method($this, 'getClass'),
			'getEntite' => new \Twig_Function_Method($this, 'getEntite'),
			'getParentActeur' => new \Twig_Function_Method($this, 'getParentActeur'),
			'getFonction' => new \Twig_Function_Method($this, 'getFonction'),
			'createDDC' => new \Twig_Function_Method($this, 'createDDC'),
			'getEtatPhase' => new \Twig_Function_Method($this, 'getEtatPhase'),
			'getPhaseDDC' => new \Twig_Function_Method($this, 'getPhaseDDC'),
			'aPoste' => new \Twig_Function_Method($this, 'aPoste'),
		);
	}

	public function aPoste(\TRC\CoreBundle\Entity\DDC\MEDP $medp,\TRC\UserBundle\Entity\User $user){
		$utilisateur = $this->getParentActeur($medp->getFonction()->getActeur());
		if($utilisateur->getCompte()->getId() == $user->getId())
			return true;
		return false;
	}
	public function getEtatPhase(\TRC\CoreBundle\Entity\DDC\PDDC $pddc){

    	return $this->em->getRepository('TRCCoreBundle:DDC\EDDC')
    				->findOneBy(
    					array(
    						"pddc"=>$pddc,
    						"active"=>true),
    					array("dateajout"=>"desc"),null,1);
    	
	}
	public function getPhaseDDC(\TRC\CoreBundle\Entity\DDC\DDC $ddc){

    	return $this->em->getRepository('TRCCoreBundle:DDC\PDDC')
    				->findOneBy(
    					array(
    						"ddc"=>$ddc,
    						"active"=>true),
    					array(),null,1);
    	
	}

	public function createDDC(\TRC\UserBundle\Entity\user $user){

		
		$utilisateur = $this->em->getRepository('TRCCoreBundle:Utilisateur')
                    ->findOneByCompte($user);
        $fonction = $this->gu->fonction($utilisateur);
        if(!is_null($fonction) && $fonction->getEntite()->getClasse() == 'Agence'){
        	return true;
        }
        return false;
	}

	public function getFonction(\TRC\CoreBundle\Entity\Utilisateur $utilisateur){

		return $this->em->getRepository('TRCCoreBundle:Fonction')
                    ->findOneBy(
                        array('acteur'=>$utilisateur->getActeur(),
                            'active'=>true,
                            'archive'=>false),
                        array('dateaffectation'=>'DESC'),
                        null,
                        0);
	}
	public function getEntite(\TRC\CoreBundle\ENtity\Entite $entite){
		return  $this->em->getRepository('TRCCoreBundle:'.$entite->getClasse())
				->findOneByEntite($entite);
	}

	public function getParentActeur(\TRC\CoreBundle\Entity\Acteur $acteur){
		return  $this->em->getRepository('TRCCoreBundle:'.$acteur->getClasse())
				->findOneByActeur($acteur);
	}
	public function getClass($object){
		$temp = explode("\\", get_class($object));
		$classe = $temp[count($temp) - 1];
		return $classe;
	}
	public function isSpam($var){
		if(is_array($var))
			$length = count($var);
		elseif (is_string($var)) {
			$length = strlen($var);
			# code...
		}
		return 'traité :  nombre de caractère :'.$length;
	}

	public function getName()
	{
		return 'TwigExtension';
	}
	

}