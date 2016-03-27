<?php 

namespace  TRC\CoreBundle\Systemes\Journal;
use Doctrine\Common\Persistence\ObjectManager;
use TRC\CoreBundle\Entity\Notification;
use TRC\CoreBundle\Systemes\General\Core;
use TRC\CoreBundle\Systemes\General\GU;
class Noti{

	protected $em;
	protected $gu;
	public function setEntityManager(ObjectManager $em,GU $gu){
	   $this->em = $em;
	   $this->gu = $gu;
	}

	public function notifierEdpMembre($ddc,$medp,$lien){
		$membre = Core::membreEdp($ddc,$this->em);
		$acteur = $medp->getFonction()->getActeur();
		$utilisateur = $this->gu->getParentActeur($acteur);
		$titre = $utilisateur->getPrenom()." a posté sur l'EDP #".$ddc->getRc();
		$contenu = "<strong>".$utilisateur->getPrenom()." a posté dans l'espace de partage du dossier <em> ".$ddc->getRc().'</em> </strong><p>'.$medp->getMessage().'</p> <br> <a href="'.$lien.'">Espace De Partage</a>';
		foreach ($membre as $key => $m) {
			if($m->getActeur()->getId() != $acteur->getId())
				$this->notifier(array(
					"acteur"=>$m->getActeur(),
					"contenu"=>$contenu,
					"titre"=>$titre
					));
		}
		return true;
	}
	public function notifierDDCMembre($ddc,$fddc,$lien){
		$membre = Core::membreEdp($ddc,$this->em);
		$acteur = $fddc->getFonction()->getActeur();
		$utilisateur = $this->gu->getParentActeur($acteur);
		$nomFichier = $fddc->getFichier()->getNom();
		$titre = $utilisateur->getPrenom()." a uploadé un fichier #".$ddc->getRc();
		$contenu = "<strong>".$utilisateur->getPrenom()." a uploadé un fichier dans le dossier <em> ".$ddc->getRc().'</em> </strong><p>'.$nomFichier.'</p> <br> <a href="'.$lien.'">Voir les documents</a>';
		foreach ($membre as $key => $m) {
			if($m->getActeur()->getId() != $acteur->getId())
				$this->notifier(array(
					"acteur"=>$m->getActeur(),
					"contenu"=>$contenu,
					"titre"=>$titre
					));
		}
		return true;
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