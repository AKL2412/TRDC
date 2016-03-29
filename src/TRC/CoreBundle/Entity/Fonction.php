<?php

namespace TRC\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Fonction
 *
 * @ORM\Table(name="fonction")
 * @ORM\Entity(repositoryClass="TRC\CoreBundle\Repository\FonctionRepository")
 */
class Fonction
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateaffectation", type="datetime")
     */
    private $dateaffectation;

    /**
     * @var bool
     *
     * @ORM\Column(name="active", type="boolean")
     */
    private $active;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateretrait", type="datetime",nullable = true)
     */
    private $dateretrait;

    /**
     * @var string
     *
     * @ORM\Column(name="matricule", type="string", length=255,unique =true)
     */
    private $matricule;

    /**
    * @ORM\ManyToOne(targetEntity="TRC\CoreBundle\Entity\Acteur")
    * @ORM\JoinColumn(nullable=false)
    */
    private $acteur;

    /**
    * @ORM\ManyToOne(targetEntity="TRC\CoreBundle\Entity\Entite")
    * @ORM\JoinColumn(nullable=false)
    */
    private $entite;

    /**
    * @ORM\ManyToOne(targetEntity="TRC\CoreBundle\Entity\Profil")
    * @ORM\JoinColumn(nullable=true)
    */
    private $profil;

    /**
     * @var boolean
     *
     * @ORM\Column(name="archive", type="boolean")
     */
    private $archive;
    /*
    @ORM\OneToOne(targetEntity="TRC\CoreBundle\Entity\DDP",cascade={"remove", "persist"})
    * @ORM\JoinColumn(nullable=true)
    //
    private $ddp;
    //*/
    public function __construct(){
        $this->dateaffectation = new \DateTime();
        $this->dateretrait = null;
        $this->active = true;
        $this->archive = false;
    }
    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set dateaffectation
     *
     * @param \DateTime $dateaffectation
     *
     * @return Fonction
     */
    public function setDateaffectation($dateaffectation)
    {
        $this->dateaffectation = $dateaffectation;

        return $this;
    }

    /**
     * Get dateaffectation
     *
     * @return \DateTime
     */
    public function getDateaffectation()
    {
        return $this->dateaffectation;
    }

    /**
     * Set active
     *
     * @param boolean $active
     *
     * @return Fonction
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Get active
     *
     * @return bool
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Set dateretrait
     *
     * @param \DateTime $dateretrait
     *
     * @return Fonction
     */
    public function setDateretrait($dateretrait)
    {
        $this->dateretrait = $dateretrait;

        return $this;
    }

    /**
     * Get dateretrait
     *
     * @return \DateTime
     */
    public function getDateretrait()
    {
        return $this->dateretrait;
    }

    /**
     * Set acteur
     *
     * @param \TRC\CoreBundle\Entity\Acteur $acteur
     *
     * @return Fonction
     */
    public function setActeur(\TRC\CoreBundle\Entity\Acteur $acteur)
    {
        $this->acteur = $acteur;

        return $this;
    }

    /**
     * Get acteur
     *
     * @return \TRC\CoreBundle\Entity\Acteur
     */
    public function getActeur()
    {
        return $this->acteur;
    }

    /**
     * Set entite
     *
     * @param \TRC\CoreBundle\Entity\Entite $entite
     *
     * @return Fonction
     */
    public function setEntite(\TRC\CoreBundle\Entity\Entite $entite)
    {
        $this->entite = $entite;

        return $this;
    }

    /**
     * Get entite
     *
     * @return \TRC\CoreBundle\Entity\Entite
     */
    public function getEntite()
    {
        return $this->entite;
    }

    /**
     * Set profil
     *
     * @param \TRC\CoreBundle\Entity\Profil $profil
     *
     * @return Fonction
     */
    public function setProfil(\TRC\CoreBundle\Entity\Profil $profil = null)
    {
        $this->profil = $profil;

        return $this;
    }

    /**
     * Get profil
     *
     * @return \TRC\CoreBundle\Entity\Profil
     */
    public function getProfil()
    {
        return $this->profil;
    }

    /**
     * Set matricule
     *
     * @param string $matricule
     *
     * @return Fonction
     */
    public function setMatricule($matricule)
    {
        $this->matricule = $matricule;

        return $this;
    }

    /**
     * Get matricule
     *
     * @return string
     */
    public function getMatricule()
    {
        return $this->matricule;
    }

    /**
     * Set ddp
     *
     * @param \TRC\CoreBundle\Entity\DDP $ddp
     *
     * @return Fonction
     */
    public function setDdp(\TRC\CoreBundle\Entity\DDP $ddp = null)
    {
        $this->ddp = $ddp;

        return $this;
    }

    /**
     * Get ddp
     *
     * @return \TRC\CoreBundle\Entity\DDP
     */
    public function getDdp()
    {
        return $this->ddp;
    }

    /**
     * Set archive
     *
     * @param boolean $archive
     *
     * @return Fonction
     */
    public function setArchive($archive)
    {
        $this->archive = $archive;

        return $this;
    }

    /**
     * Get archive
     *
     * @return boolean
     */
    public function getArchive()
    {
        return $this->archive;
    }
}
