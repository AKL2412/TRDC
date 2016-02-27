<?php 

namespace  TRC\CoreBundle\Systemes\Matricule;
use Doctrine\Common\Persistence\ObjectManager;
use TRC\CoreBundle\Systemes\General\Core;
class Matricule{

	protected $em;

	public function setEntityManager(ObjectManager $em){
	   $this->em = $em;
	}

	public function matriculeStandard($object){

		$temp = explode("\\", get_class($object));
		$classe = $temp[count($temp) - 1];
		$index = count($this->em->getRepository('TRCCoreBundle:'.$classe)->findAll())+1;
		$date = date('dmY');
		$matricule = $this->ct($classe).Core::position($index).$date;
		return $matricule;
	}

	private function ct($chaine){

		if(strlen($chaine) >= 0 )
			return strtoupper(substr($chaine, 0,3));
		else
			return strtoupper($chaine);
	}
}