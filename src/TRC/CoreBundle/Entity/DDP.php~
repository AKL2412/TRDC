<?php

namespace TRC\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DDP
 *
 * @ORM\Table(name="d_d_p")
 * @ORM\Entity(repositoryClass="TRC\CoreBundle\Repository\DDPRepository")
 */
class DDP
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
     * @var float
     *
     * @ORM\Column(name="min", type="float")
     */
    private $min;

    /**
     * @var float
     *
     * @ORM\Column(name="max", type="float")
     */
    private $max;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

     /**
    * @ORM\ManyToMany(targetEntity="TRC\CoreBundle\Entity\DDC\TDC")
    * @ORM\JoinColumn(nullable=false)
    */
    private $tdc;

    /**
    * @ORM\ManyToOne(targetEntity="TRC\CoreBundle\Entity\Fonction")
    * @ORM\JoinColumn(nullable=false)
    */
    private $fonction;

    public function __construct(){

        $this->min = $this->max = 0 ;

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
     * Set min
     *
     * @param float $min
     *
     * @return DDP
     */
    public function setMin($min)
    {
        $this->min = $min;

        return $this;
    }

    /**
     * Get min
     *
     * @return float
     */
    public function getMin()
    {
        return $this->min;
    }

    /**
     * Set max
     *
     * @param float $max
     *
     * @return DDP
     */
    public function setMax($max)
    {
        $this->max = $max;

        return $this;
    }

    /**
     * Get max
     *
     * @return float
     */
    public function getMax()
    {
        return $this->max;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return DDP
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
     * Set tdc
     *
     * @param \TRC\CoreBundle\Entity\TDC $tdc
     *
     * @return DDP
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

    /**
     * Set fonction
     *
     * @param \TRC\CoreBundle\Entity\Fonction $fonction
     *
     * @return DDP
     */
    public function setFonction(\TRC\CoreBundle\Entity\Fonction $fonction)
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
     * Add tdc
     *
     * @param \TRC\CoreBundle\Entity\DDC\TDC $tdc
     *
     * @return DDP
     */
    public function addTdc(\TRC\CoreBundle\Entity\DDC\TDC $tdc)
    {
        $this->tdc[] = $tdc;

        return $this;
    }

    /**
     * Remove tdc
     *
     * @param \TRC\CoreBundle\Entity\DDC\TDC $tdc
     */
    public function removeTdc(\TRC\CoreBundle\Entity\DDC\TDC $tdc)
    {
        $this->tdc->removeElement($tdc);
    }
}
