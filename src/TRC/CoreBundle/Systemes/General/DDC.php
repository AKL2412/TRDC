<?php 

namespace  TRC\CoreBundle\Systemes\General;
use Doctrine\Common\Persistence\ObjectManager;
use TRC\CoreBundle\Entity\Journal as JournalEntity;
use Symfony\Component\HttpFoundation\File\File;
use TRC\UserBundle\Entity\User as Compte;
use TRC\CoreBundle\Entity\Acteur as Actor;

use TRC\CoreBundle\Entity\DDC\PDDC;
use TRC\CoreBundle\Entity\DDC\EDDC;
use TRC\CoreBundle\Entity\DDC\DOCDDC;

class DDC
{

	protected $em;
	protected $cheminPrincipal;
	public function setEntityManager(ObjectManager $em){
	   $this->em = $em;
	   $this->cheminPrincipal = 'ddcs/';
	}

	

	private function matricule($object){

		$temp = explode("\\", get_class($object));
		$classe = $temp[count($temp) - 1];
		$index = count($this->em->getRepository('TRCCoreBundle:'.$classe)->findAll())+1;
		$date = date('dmY');
		$matricule = $this->ct($classe).Core::position($index).$date;
		return $matricule;
	}

	public function resume($ddc){
		$resume = "<h5>#".DDC::position($ddc->getId())."</h5>";

		// rc
		$resume .= "RS : <strong>".$ddc->getRs()."</strong><br>";
		$resume .= "RC : <strong>".$ddc->getRc()."</strong><br>";
		$resume .= "<hr>";
		$resume .= $this->cdcd($ddc);
		$resume .= $this->fichiers($ddc);
		$resume .= $this->phases($ddc);
		return $resume;
	}

	public function estDeCompetence(\TRC\CoreBundle\Entity\DDC\DDC $ddc,\TRC\CoreBundle\Entity\Fonction $fonction){



		if(!is_null($fonction->getProfil()) && $fonction->getProfil()->getDdp()){

			$tdc = $ddc->getTdc();
			$Montant = $ddc->getCdcd()->getMontant();
            
            $ddps = $this->em->getRepository('TRCCoreBundle:DDP')
                ->findBy(
                    array("fonction"=>$fonction),
                    array("id"=>"desc"),
                    null,0);
            foreach ($ddps as $key => $ddp) {

            	if(
            		$ddp->concerneTdc($tdc) &&
            		$ddp->couvrirMontant($Montant)
            		)
            		return true;
            }

        }
        return false;
	}
	public function getDDCEtat(\TRC\CoreBundle\Entity\DDC\DDC $ddc,$codeEtat){

    	$pddcs = $this->em->getRepository('TRCCoreBundle:DDC\PDDC')
    				->findByDdc($ddc);
    	foreach ($pddcs as $key => $pddc) {
    		$eddcs = $this->em->getRepository('TRCCoreBundle:DDC\EDDC')
    				->findByPddc($pddc);
    		foreach ($eddcs as $cle => $eddc) {
    			if($eddc->getEtat()->getCode() == $codeEtat){
    				return $eddc;
    			}
    		}
    	}
    	return null;
    }
    public function getDDCPhase(\TRC\CoreBundle\Entity\DDC\DDC $ddc,$codePhase){

    	$pddcs = $this->em->getRepository('TRCCoreBundle:DDC\PDDC')
    				->findByDdc($ddc);
    	foreach ($pddcs as $key => $pddc) {
    			if($pddc->getPhase()->getCode() == $codePhase)
    				return $pddc;
    	}
    	return null;
    }
    public function fichiersCharges($ddc){
		$docs = $this->em->getRepository('TRCCoreBundle:DDC\DOCDDC')
    				->findBy(
    					array("ddc"=>$ddc),
    					array("id"=>"asc"),null,0);
    	$noncharges = 0;
    	$message = "";
    	
    	foreach ($docs as $key => $doc) {

    		if(!$doc->getCharge()){
    			$noncharges = $noncharges + 1;
    			$message .= '<p class="label label-default">'.$doc->getNom().'</p> ';
    		}
    	}

    	if($noncharges == 0)
    		$message = "Tous les fichiers ont été chargés";
    	else
    		$message = "<h6>".$noncharges." document(s) n'ont pas encore été uploadés </h6>".$message;
    	if (count($docs) == 0) {
    		$message = "Aucun document n'a été uploadé; ".$ddc->getTdc()->getNom()." ne requiert de documents de toute façon ;)";
    	}
    	return array("noncharges"=>$noncharges,
    				"message"=>$message);
	}
    public function desactiverEtat(\TRC\CoreBundle\Entity\DDC\DDC $ddc,$codeEtat){

    	$pddcs = $this->em->getRepository('TRCCoreBundle:DDC\PDDC')
    				->findByDdc($ddc);
    	foreach ($pddcs as $key => $pddc) {
    		$eddcs = $this->em->getRepository('TRCCoreBundle:DDC\EDDC')
    				->findByPddc($pddc);
    		foreach ($eddcs as $cle => $eddc) {
    			if($eddc->getActive() && $eddc->getEtat()->getCode() == $codeEtat){
    				$eddc->setActive(false);
    				$this->em->flush();
    				return true;
    			}
    		}
    	}
    	
    	return false;
	}
	public function activerEtat(\TRC\CoreBundle\Entity\DDC\DDC $ddc,\TRC\CoreBundle\Entity\Fonction $fonction,$codeEtat){

    	$pddcs = $this->em->getRepository('TRCCoreBundle:DDC\PDDC')
    				->findByDdc($ddc);
    	foreach ($pddcs as $key => $pddc) {
    		$eddcs = $this->em->getRepository('TRCCoreBundle:DDC\EDDC')
    				->findByPddc($pddc);
    		foreach ($eddcs as $cle => $eddc) {
    			if(!$eddc->getActive() && $eddc->getEtat()->getCode() == $codeEtat){
    				$eddc->setDateajout(new \DateTime());
    				$eddc->setActive(true);
    				$eddc->setFonction($fonction);
    				$this->em->flush();
    				return $eddc;
    			}
    		}
    	}
    	
    	return null;
	}
	public function getEtatPhase(\TRC\CoreBundle\Entity\DDC\PDDC $pddc){

    	return  $this->em->getRepository('TRCCoreBundle:DDC\EDDC')
    				->findOneBy(
    					array(
    						"pddc"=>$pddc,
    						"active"=>true),
    					array("dateajout"=>"desc"),null,1);
    	
	}
	public function getPhaseDDC(\TRC\CoreBundle\Entity\DDC\DDC $ddc){

    	return  $this->em->getRepository('TRCCoreBundle:DDC\PDDC')
    				->findOneBy(
    					array(
    						"ddc"=>$ddc,
    						"active"=>true),
    					array(),null,1);
    	
	}
	public function activerPhase(\TRC\CoreBundle\Entity\DDC\DDC $ddc,$codePhase){

		$phase = $this->em->getRepository('TRCCoreBundle:DDC\Phase')
    				->findOneByCode($codePhase);
    	$pddc = $this->em->getRepository('TRCCoreBundle:DDC\PDDC')
    				->findOneBy(
    					array(
    						"ddc"=>$ddc,
    						"phase"=>$phase),
    					array(),null,1);
    	$pddc->setDatedebut(new \DateTime());
    	$pddc->setActive(true);
    	$this->em->flush();
    	return $pddc;
	}
	public function desactiverPhase(\TRC\CoreBundle\Entity\DDC\DDC $ddc,$codePhase){

		$phase = $this->em->getRepository('TRCCoreBundle:DDC\Phase')
    				->findOneByCode($codePhase);
    	$pddc = $this->em->getRepository('TRCCoreBundle:DDC\PDDC')
    				->findOneBy(
    					array(
    						"ddc"=>$ddc,
    						"phase"=>$phase),
    					array(),null,1);
    	$pddc->setDatefin(new \DateTime());
    	$pddc->setActive(false);
    	$this->em->flush();
    	return true;
	}
	public function setDocs(\TRC\CoreBundle\Entity\DDC\DDC $ddc){
		$docs = $this->em->getRepository('TRCCoreBundle:DDC\DOCTDC')
    				->findBy(
    					array("tdc"=>$ddc->getTdc()),
    					array(),null,0);
    	foreach ($docs as $key => $doc) {
    		$docddc = new DOCDDC();
    		$docddc->setNom($doc->getNom());
    		$docddc->setDdc($ddc);
    		$this->em->persist($docddc);
    	}

    	$this->em->flush();
    	return true;
	}
	public function initPhases(\TRC\CoreBundle\Entity\DDC\DDC $ddc){

		$phases = $this->em->getRepository('TRCCoreBundle:DDC\Phase')
					->findBy(
						array(),
						array("id"=>"asc"),null,0);
		foreach ($phases as $key => $phase) {
			# code...
			$pddc = new PDDC();
			$pddc->setDdc($ddc);
			$pddc->setPhase($phase);
			$this->em->persist($pddc);

			$etats = $this->em->getRepository('TRCCoreBundle:DDC\Etat')
					->findBy(
						array("phase"=>$phase),
						array("id"=>"asc"),null,0);
			foreach ($etats as $cle => $etat) {
				$eddc = new EDDC();
		    	$eddc->setPddc($pddc);
		    	$eddc->setEtat($etat);
		    	$eddc->setVerdict($etat->getDecision());
		    	$this->em->persist($eddc);
			}
		}	
    	$this->em->flush();
    	return true;
	}
	private function phases($ddc){
		$docs = $this->em->getRepository('TRCCoreBundle:DDC\PDDC')
    				->findBy(
    					array("ddc"=>$ddc),
    					array("id"=>"asc"),null,0);

    	$resume = '<table class="table table-condensed table-bordered "><caption class="text-center"> Les phases ['.count($docs).']</caption>'.
    		'<thead><tr>'.
    		'<th colspan="3">Phases</th><th colspan="3">Etat</th></tr>'.
    		'<tr><th>Nom</th><th>Debut</th><th>Fin</th><th>Etat</th><th>Date</th><th>Acteur</th></tr></thead>'.
    		'<tbody>';
    		//*
    		foreach ($docs as $k  => $pddc) {

    			$etats = $this->em->getRepository('TRCCoreBundle:DDC\EDDC')
    				->findBy(
    					array("pddc"=>$pddc),
    					array("id"=>"asc"),null,0);
    			$rowspan = count($etats);
    			$rowsEtat = "";
    			if ($rowspan > 0) {
    				

    				$np = '<td rowspan="'.$rowspan.'">'.$pddc->getPhase()->getCode().'</td>';
    				if(is_null($pddc->getDatedebut())){
    					$ddp = '<td rowspan="'.$rowspan.'">##-##-####</td>';
    				}else{
    					$ddp = '<td rowspan="'.$rowspan.'">'.$pddc->getDatedebut()->format('d-m-Y H:i').'</td>';
    				}
    				if(is_null($pddc->getDatefin())){
    					$dfp = '<td rowspan="'.$rowspan.'">##-##-####</td>';
    				}else{
    					$dfp = '<td rowspan="'.$rowspan.'">'.$pddc->getDatefin()->format('d-m-Y H:i').'</td>';
    				}
    				$deb = 0;
    				foreach ($etats as $key => $eddc) {
    					$rowsEtat .= "<tr>";
    					if($deb == 0){
    						$rowsEtat .= $np.$ddp.$dfp;
    						$deb = 1 ;
    					}
    					$rowsEtat .= "<td>".$eddc->getEtat()->getNom()."</td>";

    							if(is_null($eddc->getDateajout())){
				    					$rowsEtat .= "<td>##-##-####</td>";
				    				}else{
				    					$rowsEtat .= "<td>".$eddc->getDateajout()->format('d-m-Y H:i')."</td>";
				    				}
    							if(is_null($eddc->getFonction())){
				    					$rowsEtat .= "<td>##-##-####</td>";
				    				}else{
				    					$rowsEtat .= "<td>".$eddc->getFonction()->getId()."</td>";
				    				}


    				}

    			}else{
    				$np = '<td >'.$pddc->getPhase()->getCode().'</td>';
    				$ddp = '<td>'.$pddc->getDatedebut()->format('d-m-Y H:i').'</td>';
    				if(is_null($pddc->getDatefin())){
    					$dfp = '<td >##-##-####</td>';
    				}else{
    					$ddp = '<td >'.$pddc->getDatefin()->format('d-m-Y H:i').'</td>';
    				}
    				$rowsEtat .= "<tr>";
    				$rowsEtat .=$np.$ddp.$dfp;
    				$rowsEtat .= '<td colspan="3">Aucun état</td> <tr>';
    			}
    			$resume .= $rowsEtat;
    		}
    		//*/
    		$resume .= '</tbody></table>';
    		return $resume;
    }
    private function cdcd($ddc){
		
		$resume = '<h5 class="text-center">Les caratéristiques du dossier</h5>';
		if(is_null($ddc->getCdcd())){
			$resume .= '<div class="text-center alert alert-danger"><h3>Non renseignées</h3></div>';
		}else{
    	$resume .= '<table class="table table-condensed "><tbody>';
    	
    		$resume .= '<tr>'.
    					'<td>Montant : <strong>'.$ddc->getCdcd()->getMontant().'</strong><td>'.
    					'<td>Durée : <strong>'.$ddc->getCdcd()->getDuree().'</strong><td>'.
    					'<td>Traite : <strong>'.$ddc->getCdcd()->getQuotite().'</strong><td>';
    		$resume .= '</tr>';
    		$resume .= '</tbody></table>';
    	}
    	
    	

    	return $resume;
	}
	private function fichiers($ddc){
		$docs = $this->em->getRepository('TRCCoreBundle:DDC\DOCDDC')
    				->findBy(
    					array("ddc"=>$ddc),
    					array("id"=>"asc"),null,0);
    	$resume = '<table class="table table-condensed table-striped"><caption class="text-center"> Les documents à fournir ['.count($docs).']</caption>'.
    		'<thead><tr><th>Nom</th><th>Etat</th></tr></thead><tbody>';
    	foreach ($docs as $key => $doc) {
    		$resume .= '<tr>'.
    					'<td>'.$doc->getNom().'<td>';
    		if($doc->getCharge())
    			$resume .= '<td>Chargé</td>';
    		else
    			$resume .= '<td class="text-danger">Pas encore chargé</td>';
    		$resume .= '</tr>';
    	}
    	$resume .= '</tbody></table>';

    	return $resume;
	}
	public function initDDC($ddc,$user){
		if($ddc === null)
			return false;

		/*************************
			Creation du dossier du ddc
		**************************/
		
		$dossier = $this->cheminPrincipal.$ddc->getRs().'/';
		if(!is_dir($dossier)){

			if(!is_null($ddc->getEdp()))
				$ddc->getEdp()->setMatricule($ddc->getEdp());
			//Creation du dossier principal 
			mkdir($dossier,0777);
			$typeJournal = $this->em->getRepository('TRCCoreBundle:TypeJournal')
							->findOneByCode('CRE_DOS');
			
			//*
			$jj = $this->enregistrer(
			array(
					'user'=>$user,
					'type'=>$typeJournal,
					'contenu'=>'Creation du dossier : '.$dossier
					)
				);
			//*/
			// creation du dossier de fichiers
			$dossierImage = $dossier.'fichiers/';
			mkdir($dossierImage,0777);
			$dossierImage = $dossier.'epd/';
			mkdir($dossierImage,0777);
			

		}

		$ddc->setDossier($dossier);

		return $ddc;
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
	public function enregistrer($array){

		$j = new JournalEntity();
		$j->setUser($array['user']);
		$j->setType($array['type']);
		$j->setContenu($array['contenu']);

		$this->em->persist($j);
		$this->em->flush();
		return true;
	}
	public function getClassEtatDDC(\TRC\CoreBundle\Entity\DDC\EDDC $phase){

		if($phase->getActive())
			return 'encours';
		else{
			if(!is_null($phase->getDateajout()))
				return 'terminer';
			else
				return 'avenir';
		}
	}
}