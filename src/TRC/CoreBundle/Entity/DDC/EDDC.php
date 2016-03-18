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
     * @ORM\Column(name="dateajout", type="datetime")
     */
    private $dateajout;

    /**
    * @ORM\ManyToOne(targetEntity="TRC\CoreBundle\Entity\DDC\Etat")
    * @ORM\JoinColumn(nullable=false)
    */
    private $etat;
    /**
    * @ORM\ManyToOne(targetEntity="TRC\CoreBundle\Entity\Acteur")
    * @ORM\JoinColumn(nullable=true)
    */
    private $acteur;

    /**
    * @ORM\ManyToOne(targetEntity="TRC\CoreBundle\Entity\DDC\PDDC")
    * @ORM\JoinColumn(nullable=false)
    */
    private $pddc;

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
}
