<?php 

namespace  TRC\CoreBundle\Systemes\General;
use Doctrine\Common\Persistence\ObjectManager;

class Core{

	
	public static function membreEdp($ddc,ObjectManager $em){
		$membre = array();
		$membre[] = $ddc->getFonction();

		$phases = $em->getRepository('TRCCoreBundle:DDC\PDDC')
    				->findBy(
    					array(
    						"ddc"=>$ddc,
    						"active"=>true),
    					array(),null,0);
    	foreach ($phases as $key => $phase) {
    		$etats = $em->getRepository('TRCCoreBundle:DDC\EDDC')
    				->findBy(
    					array(
    						"pddc"=>$phase,
    						"active"=>true),
    					array("dateajout"=>"desc"),null,0);
    		foreach ($etats as $key => $etat) {
    			$fonction = $etat->getFonction();
    			if(!is_null($fonction) && !Core::mexist($membre,$fonction))
    				$membre[] = $fonction;
    		}
    	}
		return $membre;
	}
	public static function mexist($table,$fonction){
		foreach ($table as $key => $f) {
			if($f->getId() == $fonction->getId())
				return true;
		}
		return false;
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
}