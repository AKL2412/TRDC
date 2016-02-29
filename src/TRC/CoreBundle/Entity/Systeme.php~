<?php

namespace TRC\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Systeme
 *
 * @ORM\Table(name="systeme")
 * @ORM\Entity(repositoryClass="TRC\CoreBundle\Repository\SystemeRepository")
 */
class Systeme
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
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=100, unique=true)
     */
    private $code;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateajout", type="datetime", nullable=true)
     */
    private $dateajout;

    /**
     * @var string
     *
     * @ORM\Column(name="matricule", type="string", length=255)
     */
    private $matricule;

    /**
    * @ORM\OneToOne(targetEntity="TRC\CoreBundle\Entity\Acteur",cascade={"remove", "persist"})
    * @ORM\JoinColumn(nullable=true)
    */
    private $acteur;

public function __construct(){
    $this->dateajout = new \DateTime();
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
     * Set nom
     *
     * @param string $nom
     *
     * @return Systeme
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set code
     *
     * @param string $code
     *
     * @return Systeme
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Systeme
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set dateajout
     *
     * @param \DateTime $dateajout
     *
     * @return Systeme
     */
    public function setDateajout($dateajout)
    {
        $this->dateajout = $dateajout;

        return $this;
    }

    /**
     * Get dateajout
     *
     * @return \DateTime
     */
    public function getDateajout()
    {
        return $this->dateajout;
    }

    /**
     * Set matricule
     *
     * @param string $matricule
     *
     * @return Systeme
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
     * Set acteur
     *
     * @param \TRC\CoreBundle\Entity\Acteur $acteur
     *
     * @return Utilisateur
     */
    public function setActeur(\TRC\CoreBundle\Entity\Acteur $acteur = null)
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
}
