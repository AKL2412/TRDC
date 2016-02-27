<?php 

namespace  TRC\CoreBundle\Systemes\Journal;
use Doctrine\Common\Persistence\ObjectManager;
use TRC\CoreBundle\Entity\Journal as JournalEntity;
class Journal{

	protected $em;

	public function setEntityManager(ObjectManager $em){
	   $this->em = $em;
	}

	public function enregistrer($array){

		$j = new JournalEntity();
		$j->setUser($array['user']);
		$j->setType($array['type']);
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