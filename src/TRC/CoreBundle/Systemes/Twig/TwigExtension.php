<?php 
namespace  TRC\CoreBundle\Systemes\Twig;

use Doctrine\Common\Persistence\ObjectManager;
//use Symfony\Bundle\TwigBundle\DependencyInjection\TwigExtension;

class TwigExtension extends \Twig_Extension{

	protected $em;

	public function __construct(ObjectManager $em){
	   
	   $this->em = $em;

	}

	public function getFunctions()
	{
		return array(
			'checkIfSpam' => new \Twig_Function_Method($this, 'isSpam'),
			'getClass' => new \Twig_Function_Method($this, 'getClass'),
			'getEntite' => new \Twig_Function_Method($this, 'getEntite'),
		);
	}

	public function getEntite(\TRC\CoreBundle\ENtity\Entite $entite){
		return  $this->em->getRepository('TRCCoreBundle:'.$entite->getClasse())
				->findOneByEntite($entite);
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