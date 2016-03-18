<?php 

namespace  TRC\CoreBundle\Systemes\Journal;
use Doctrine\Common\Persistence\ObjectManager;
use TRC\CoreBundle\Entity\Notification;
class Noti{

	protected $em;

	public function setEntityManager(ObjectManager $em){
	   $this->em = $em;
	}

	public function notifier($array){

		$j = new Notification();
		if(array_key_exists("entite", $array))
			$j->setEntite($array['entite']);
		else
			$j->setActeur($array['acteur']);

		$j->setTitre($array['titre']);
		$j->setContenu($array['contenu']);

		$this->em->persist($j);
		$this->em->flush();
		/*
		echo "<pre>";
		print_r($j);
		echo "</pre>";
		die('');
		//*/
		return true;
	}

	
}