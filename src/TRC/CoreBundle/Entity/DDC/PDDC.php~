<?php

namespace TRC\CoreBundle\Entity\DDC;

use Doctrine\ORM\Mapping as ORM;

/**
 * PDDC
 *
 * @ORM\Table(name="p_d_d_c")
 * @ORM\Entity(repositoryClass="TRC\CoreBundle\Repository\DDC\PDDCRepository")
 */
class PDDC
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
     * @ORM\Column(name="datedebut", type="datetime")
     */
    private $datedebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datefin", type="datetime", nullable=true)
     */
    private $datefin;

    /**
    * @ORM\ManyToOne(targetEntity="TRC\CoreBundle\Entity\DDC\Phase")
    * @ORM\JoinColumn(nullable=false)
    */
    private $phase;
    /**
    * @ORM\ManyToOne(targetEntity="TRC\CoreBundle\Entity\DDC\DDC")
    * @ORM\JoinColumn(nullable=false)
    */
    private $ddc;

    /**
    * @ORM\ManyToOne(targetEntity="TRC\CoreBundle\Entity\Acteur")
    * @ORM\JoinColumn(nullable=true)
    */
    private $acteur;

    public function __construct(){
        $this->datedebut = new \DateTime();
        $this->datefin = null;
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
     * Set datedebut
     *
     * @param \DateTime $datedebut
     *
     * @return PDDC
     */
    public function setDatedebut($datedebut)
    {
        $this->datedebut = $datedebut;

        return $this;
    }

    /**
     * Get datedebut
     *
     * @return \DateTime
     */
    public function getDatedebut()
    {
        return $this->datedebut;
    }

    /**
     * Set datefin
     *
     * @param \DateTime $datefin
     *
     * @return PDDC
     */
    public function setDatefin($datefin)
    {
        $this->datefin = $datefin;

        return $this;
    }

    /**
     * Get datefin
     *
     * @return \DateTime
     */
    public function getDatefin()
    {
        return $this->datefin;
    }

    /**
     * Set phase
     *
     * @param \TRC\CoreBundle\Entity\DDC\Phase $phase
     *
     * @return PDDC
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
     * Set ddc
     *
     * @param \TRC\CoreBundle\Entity\DDC\DDC $ddc
     *
     * @return PDDC
     */
    public function setDdc(\TRC\CoreBundle\Entity\DDC\DDC $ddc)
    {
        $this->ddc = $ddc;

        return $this;
    }

    /**
     * Get ddc
     *
     * @return \TRC\CoreBundle\Entity\DDC\DDC
     */
    public function getDdc()
    {
        return $this->ddc;
    }

    /**
     * Set acteur
     *
     * @param \TRC\CoreBundle\Entity\Acteur $acteur
     *
     * @return PDDC
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
