<?php

namespace TRC\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\Form\FormFactory;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

use TRC\CoreBundle\Entity\Profil;
use TRC\CoreBundle\Entity\Agence;
use TRC\CoreBundle\Entity\BOC;
use TRC\CoreBundle\Entity\CIC;
use TRC\CoreBundle\Entity\Zone;
use TRC\CoreBundle\Entity\Entite;
use TRC\CoreBundle\Form\AgenceType;
use TRC\CoreBundle\Form\BOCType;
use TRC\CoreBundle\Form\CICType;
use TRC\CoreBundle\Form\ZoneType;


class EntitesController extends Controller
{

    public function entitesAction()
    {
    	$sysmatricule = $this->get('trc_core.matricule');
    	$sysjournal = $this->get('trc_core.journal');
    	$em = $this->getDoctrine()->getManager();
        return $this->render('TRCAdminBundle:Entites:entites.html.twig');
    }

    public function entitesAjoutAction($entite,$matricule = null,Request $request){
        

        $em = $this->getDoctrine()->getManager();
        $class = 'TRC\CoreBundle\Entity\\'.$entite;
        $forme = 'TRC\CoreBundle\Form\\'.$entite.'Type';
        $formType = new $forme;
        $codeJournal = "MOD_EN_".strtoupper(substr($entite, 0,3));
        if($matricule === null){
            $objet = new $class;
            
            $codeJournal = "AJ_EN_".strtoupper(substr($entite, 0,3));
        }else{
            $objet = $em->getRepository('TRCCoreBundle:'.$entite)
                ->findOneByMatricule($matricule);
            if($objet === null)
                throw new NotFoundHttpException("Erreur de matricule '$matricule'");
                
        }
        
        $typeJournal = $em->getRepository('TRCCoreBundle:TypeJournal')
            ->findOneByCode($codeJournal);
        //*
        $form = $this->get('form.factory')
        ->create($formType,$objet);
        if($form->handleRequest($request)->isValid()){

            $sysmatricule = $this->get('trc_core.matricule');
            $sysjournal = $this->get('trc_core.journal');

            if($matricule === null){

                // Attribuer un matricule à l'objet
                $objet->setMatricule($sysmatricule->matriculeStandard($objet));
                
                $entite = new Entite();
                $entite->setClasse(get_class($objet));
                $objet->setEntite($entite);

                $em->persist($objet);
            }
            

            
            $em->flush();
            //Historiser l'action
            $journalisation = array(
                'user'=>$this->getUser(),
                'type'=>$typeJournal,
                'contenu'=>$objet
                );
            $sysjournal->enregistrer($journalisation);

           return $this->redirect($this->generateUrl('trc_admin_entites_voir_une',array('entite'=>$entite,'code'=>$objet->getCode())));
        }

        //*/
        return $this->render('TRCAdminBundle:Entites:entitesAjout.html.twig',array('entite'=>$entite,
            'objet'=>$objet,
            'codeJournal'=>$codeJournal,
            "form"=>$form->createView()));

    }

    public function entitesVoirUneAction($entite,$code,Request $request){

        $em = $this->getDoctrine()->getManager();

        $classe = 'TRCCoreBundle:'.$entite;
        //*
        $objet = $em->getRepository('TRCCoreBundle:'.$entite)
                ->findOneByCode($code);
        //*/
        /*
        $query = $em->createQuery("SELECT a FROM $classe a WHERE a.id = :code");
        $query->setParameter('code',$code);

        $objet = $query->getResult();
        //*/
        if($objet === null)
            throw new NotFoundHttpException("Error de code. Ce code [$code] ne correspond à rien");
        $profils = $em->getRepository('TRCCoreBundle:Profil')
                    ->findByEntite($entite);

        $acteurs = $em->getRepository('TRCCoreBundle:Fonction')
                    ->findBy(
                        array("entite"=>$objet->getEntite(),
                            "active"=>true),
                        array(),null,0);

        return $this->render('TRCAdminBundle:Entites:entitesVoirUne.html.twig',array('entite'=>$entite,
            'profils'=>$profils,
            'objet'=>$objet,
            'acteurs'=>$acteurs));
    }

    public function entitesParCategorieAction($entite,Request $request)
    {
        $sysmatricule = $this->get('trc_core.matricule');
        $sysjournal = $this->get('trc_core.journal');
        $em = $this->getDoctrine()->getManager();

        $p = 1;
        $nbre = 4;
        $criteres = array();
        if( 
            $request->query->get('p')!== null 
            && 
            !empty($request->query->get('p'))
          ){
                $p = $request->query->get('p');
        }
        $id = ($p-1)*$nbre;
        if($id < 0)
            $id = 0;
        $objets = $em->getRepository('TRCCoreBundle:'.$entite)
                    ->findBy(
                        $criteres,
                        array(),
                        $nbre,
                        $id
                        );
        $servicePagination = $this->get('trc_core.pagination');

        $sup = "groupe=rien";
        $objet = $entite;
        $url = $this->generateUrl('trc_admin_entites_par_categorie',array('entite'=>$entite));
        $urlRoute = 'trc_admin_entites_par_categorie';
        $pagination = $servicePagination->pagination($objet,$p,$url,$urlRoute,$criteres,$nbre);
        return $this->render('TRCAdminBundle:Entites:entitesParCategorie.html.twig',array('objets'=> $objets,
            "entite"=>$entite,
            "pagination"=>$pagination));
    }
}