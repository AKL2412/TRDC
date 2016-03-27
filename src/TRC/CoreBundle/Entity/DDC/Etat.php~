<?php

namespace TRC\CoreBundle\Entity\DDC;

use Doctrine\ORM\Mapping as ORM;

/**
 * Etat
 *
 * @ORM\Table(name="etat")
 * @ORM\Entity(repositoryClass="TRC\CoreBundle\Repository\DDC\EtatRepository")
 */
class Etat
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
     * @ORM\Column(name="code", type="string", length=50)
     */
    private $code;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
    * @ORM\ManyToOne(targetEntity="TRC\CoreBundle\Entity\DDC\Phase",cascade={"remove", "persist"})
    * @ORM\JoinColumn(nullable=false)
    */
    private $phase;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=250)
     */
    private $nom;

    /**
     * @var bool
     *
     * @ORM\Column(name="decision", type="boolean")
     */
    private $decision;

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
     * @return Etat
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
     * @return Etat
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
     * @return Etat
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
     * Set phase
     *
     * @param \TRC\CoreBundle\Entity\DDC\Phase $phase
     *
     * @return Etat
     */
    public function setPhase(\TRC\CoreBundle\Entity\DDC\Phase $phase)
    {
        $this->phase = $phase;

        return $this;
    }

    /**
     * Get phase
     *
     * @return \TRC\CoreBundle\Entity\DDC\Phase
     */
    public function getPhase()
    {
        return $this->phase;
    }


    /**
     * Set decision
     *
     * @param boolean $decision
     *
     * @return Etat
     */
    public function setDecision($decision)
    {
        $this->decision = $decision;

        return $this;
    }

    /**
     * Get decision
     *
     * @return boolean
     */
    public function getDecision()
    {
        return $this->decision;
    }
}
