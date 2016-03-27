<?php

namespace TRC\CoreBundle\Entity\DDC;

use Doctrine\ORM\Mapping as ORM;

/**
 * DOCTDC
 *
 * @ORM\Table(name="d_o_c_t_d_c")
 * @ORM\Entity(repositoryClass="TRC\CoreBundle\Repository\DDC\DOCTDCRepository")
 */
class DOCTDC
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
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
    * @ORM\ManyToOne(targetEntity="TRC\CoreBundle\Entity\DDC\TDC")
    * @ORM\JoinColumn(nullable=false)
    */
    private $tdc;

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
     * @return DOCTDC
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
     * Set nom
     *
     * @param string $nom
     *
     * @return DOCTDC
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
     * Set tdc
     *
     * @param \TRC\CoreBundle\Entity\DDC\TDC $tdc
     *
     * @return DOCTDC
     */
    public function setTdc(\TRC\CoreBundle\Entity\DDC\TDC $tdc)
    {
        $this->tdc = $tdc;

        return $this;
    }

    /**
     * Get tdc
     *
     * @return \TRC\CoreBundle\Entity\DDC\TDC
     */
    public function getTdc()
    {
        return $this->tdc;
    }
}
