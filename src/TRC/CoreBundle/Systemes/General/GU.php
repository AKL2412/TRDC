<?php 

namespace  TRC\CoreBundle\Systemes\General;
use Doctrine\Common\Persistence\ObjectManager;
use TRC\CoreBundle\Entity\Journal as JournalEntity;
use Symfony\Component\HttpFoundation\File\File;
use TRC\UserBundle\Entity\User as Compte;
use TRC\CoreBundle\Entity\Acteur as Actor;
class GU
{

	protected $em;
	protected $cheminPrincipal;
	public function setEntityManager(ObjectManager $em){
	   $this->em = $em;
	   $this->cheminPrincipal = 'Utilisateurs/';
	}

	public function getEntite(\TRC\CoreBundle\ENtity\Entite $entite){
		
		return  $this->em->getRepository('TRCCoreBundle:'.$entite->getClasse())
				->findOneByEntite($entite);
	}
	
	public function fonction(\TRC\CoreBundle\Entity\Utilisateur $utilisateur){

		return $this->em->getRepository('TRCCoreBundle:Fonction')
                    ->findOneBy(
                        array('acteur'=>$utilisateur->getActeur(),
                            'active'=>true,
                            'archive'=>false),
                        array('dateaffectation'=>'DESC'),
                        null,
                        0);
	}
	public function creerUtilisateur($utilisateur,$user){
		if($utilisateur === null)
			return false;

		/*************************
			Creation du dossier de l'utilisateur
		**************************/
		
		$dossierUtilisateur = $this->cheminPrincipal.$utilisateur->getMatricule().'/';
		if(!is_dir($dossierUtilisateur)){
			//Creation du dossier principal 
			mkdir($dossierUtilisateur,0777);
			$typeJournal = $this->em->getRepository('TRCCoreBundle:TypeJournal')
							->findOneByCode('CRE_DOS');
			
			//*
			$jj = $this->enregistrer(
			array(
					'user'=>$user,
					'type'=>$typeJournal,
					'contenu'=>'Creation du dossier : '.$dossierUtilisateur
					)
				);
			//*/
			// creation du dossier d'images
			$dossierImage = $dossierUtilisateur.'images/';
			mkdir($dossierImage,0777);
			$file = $utilisateur->getImage();
			if($file != null){
                    $extension = $file->guessExtension();
                    if (!$extension) {
                        $extension = 'jpg';
                    }
                    $nomImage = '00.'.$extension;
                    if($file == 'img/default.png'){
                    	$nomImage = 'default.png';
                    	copy('img/default.png', $dossierImage.'/'.$nomImage);
                    }else{
                    	$file->move($dossierImage, $nomImage);
                    }
                    
                    $utilisateur->setImage($dossierImage.'/'.$nomImage);
                }

            $utilisateur->setCompte($this->creerCompte($utilisateur));
            $utilisateur->setActeur($this->creerActor($utilisateur));
			

		}



		return $utilisateur;
	}
	public static function position($index){

		$chaine ="";
		if($index < 10)
			$chaine = "000".$index;
		elseif ($index < 100) 
			$chaine = "00".$index;
		elseif ($index < 1000) 
			$chaine = "0".$index;
		else
			$chaine = $index;
		return $chaine;

	}
	private function creerCompte($utilisateur){
		$compte = new Compte();
		$compte->setEmail($utilisateur->getEmail());
		$compte->setUsername('u'.$utilisateur->getMatricule());
		$compte->setPlainPassword('a123*123');
		$compte->setEnabled(true);
		$this->em->persist($compte);
		$this->em->flush();
		return $compte;
	}
	private function creerActor($utilisateur){
		$entite = new Actor();
        $entite->setClasse(get_class($utilisateur));
        $this->em->persist($entite);
		$this->em->flush();
        return $entite;
	}
	public function lesFichiers($dir){
		$nbre = 0;
		$lesFichiers = array();
		
		$dh  = opendir($dir);
		while (false !== ($filename = readdir($dh))) {
			if(is_dir($dir.$filename) && strlen($filename) > 3)
		    $lesFichiers[$filename] = $this->lesFichiers($dir.$filename.'/');
			else
				$lesFichiers[] = $filename;
		}

		return $lesFichiers;
	}
	public function images(\TRC\CoreBundle\Entity\Utilisateur $utilisateur){
		$images = array();
		foreach (glob($this->cheminPrincipal.$utilisateur->getMatricule().'/images/'."*.png") as $filename) {
				$images[] = $filename;
			    
			}

		return $images;
	}
	private function enregistrer($array){

		$j = new JournalEntity();
		$j->setUser($array['user']);
		$j->setType($array['type']);
		$j->setContenu($array['contenu']);

		$this->em->persist($j);
		$this->em->flush();
		return true;
	}
	public function getParentActeur(\TRC\CoreBundle\Entity\Acteur $acteur){
		return  $this->em->getRepository('TRCCoreBundle:'.$acteur->getClasse())
				->findOneByActeur($acteur);
	}
}