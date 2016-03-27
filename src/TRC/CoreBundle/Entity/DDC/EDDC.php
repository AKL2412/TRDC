<?php

namespace TRC\CoreBundle\Entity\DDC;

use Doctrine\ORM\Mapping as ORM;

/**
 * EDDC
 *
 * @ORM\Table(name="e_d_d_c")
 * @ORM\Entity(repositoryClass="TRC\CoreBundle\Repository\DDC\EDDCRepository")
 */
class EDDC
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
     * @ORM\Column(name="dateajout", type="datetime",nullable=true)
     */
    private $dateajout;

    /**
    * @ORM\ManyToOne(targetEntity="TRC\CoreBundle\Entity\DDC\Etat")
    * @ORM\JoinColumn(nullable=false)
    */
    private $etat;
    /**
    * @ORM\ManyToOne(targetEntity="TRC\CoreBundle\Entity\Fonction")
    * @ORM\JoinColumn(nullable=true)
    */
    private $fonction;

    /**
    * @ORM\ManyToOne(targetEntity="TRC\CoreBundle\Entity\DDC\PDDC",cascade={"remove", "persist"})
    * @ORM\JoinColumn(nullable=false)
    */
    private $pddc;

    /**
     * @var bool
     *
     * @ORM\Column(name="active", type="boolean")
     */
    private $active;

    /**
     * @var bool
     *
     * @ORM\Column(name="verdict", type="boolean")
     */
    private $verdict;

    /**
    * @ORM\ManyToOne(targetEntity="TRC\CoreBundle\Entity\DDC\Decision",cascade={"remove", "persist"})
    * @ORM\JoinColumn(nullable=true)
    */
    private $decision;

    /**
     * @var string
     *
     * @ORM\Column(name="commentaire", type="text",nullable=true)
     */
    private $commentaire;

    public function __construct(){
        $this->dateajout = null;
        $this->active = false;
        $this->fonction = null;
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
     * Set dateajout
     *
     * @param \DateTime $dateajout
     *
     * @return EDDC
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
     * Set etat
     *
     * @param \TRC\CoreBundle\Entity\DDC\Etat $etat
     *
     * @return EDDC
     */
    public function setEtat(\TRC\CoreBundle\Entity\DDC\Etat $etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return \TRC\CoreBundle\Entity\DDC\Etat
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set pddc
     *
     * @param \TRC\CoreBundle\Entity\DDC\PDDC $pddc
     *
     * @return EDDC
     */
    public function setPddc(\TRC\CoreBundle\Entity\DDC\PDDC $pddc)
    {
        $this->pddc = $pddc;

        return $this;
    }

    /**
     * Get pddc
     *
     * @return \TRC\CoreBundle\Entity\DDC\PDDC
     */
    public function getPddc()
    {
        return $this->pddc;
    }

    /**
     * Set acteur
     *
     * @param \TRC\CoreBundle\Entity\Acteur $acteur
     *
     * @return EDDC
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

    /**
     * Set fonction
     *
     * @param \TRC\CoreBundle\Entity\Fonction $fonction
     *
     * @return EDDC
     */
    public function setFonction(\TRC\CoreBundle\Entity\Fonction $fonction = null)
    {
        $this->fonction = $fonction;

        return $this;
    }

    /**
     * Get fonction
     *
     * @return \TRC\CoreBundle\Entity\Fonction
     */
    public function getFonction()
    {
        return $this->fonction;
    }

    /**
     * Set active
     *
     * @param boolean $active
     *
     * @return EDDC
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Get active
     *
     * @return boolean
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Set verdict
     *
     * @param boolean $verdict
     *
     * @return EDDC
     */
    public function setVerdict($verdict)
    {
        $this->verdict = $verdict;

        return $this;
    }

    /**
     * Get verdict
     *
     * @return boolean
     */
    public function getVerdict()
    {
        return $this->verdict;
    }

    /**
     * Set decision
     *
     * @param \TRC\CoreBundle\Entity\DDC\Decision $decision
     *
     * @return EDDC
     */
    public function setDecision(\TRC\CoreBundle\Entity\DDC\Decision $decision = null)
    {
        $this->decision = $decision;

        return $this;
    }

    /**
     * Get decision
     *
     * @return \TRC\CoreBundle\Entity\DDC\Decision
     */
    public function getDecision()
    {
        return $this->decision;
    }

    /**
     * Set commentaire
     *
     * @param string $commentaire
     *
     * @return EDDC
     */
    public function setCommentaire($commentaire)
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    /**
     * Get commentaire
     *
     * @return string
     */
    public function getCommentaire()
    {
        return $this->commentaire;
    }
}
