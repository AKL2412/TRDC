<?php

namespace TRC\CoreBundle\Entity\DDC;

use Doctrine\ORM\Mapping as ORM;

/**
 * FDDC
 *
 * @ORM\Table(name="f_d_d_c")
 * @ORM\Entity(repositoryClass="TRC\CoreBundle\Repository\DDC\FDDCRepository")
 */
class FDDC
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
    * @ORM\ManyToOne(targetEntity="TRC\CoreBundle\Entity\DDC\DDC",cascade={"remove", "persist"})
    * @ORM\JoinColumn(nullable=false)
    */
    private $ddc;

     /**
    * @ORM\ManyToOne(targetEntity="TRC\CoreBundle\Entity\DDC\DOCDDC",cascade={"remove", "persist"})
    * @ORM\JoinColumn(nullable=true)
    */
    private $docddc;


    /**
    * @ORM\OneToOne(targetEntity="TRC\CoreBundle\Entity\DDC\Fichier",cascade={"remove", "persist"})
    * @ORM\JoinColumn(nullable=false)
    */
    private $fichier;

    /**
    * @ORM\ManyToOne(targetEntity="TRC\CoreBundle\Entity\Fonction")
    * @ORM\JoinColumn(nullable=false)
    */
    private $fonction;

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
     * @return FDDC
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
     * Set ddc
     *
     * @param \TRC\CoreBundle\Entity\DDC\DDC $ddc
     *
     * @return FDDC
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
     * Set fichier
     *
     * @param \TRC\CoreBundle\Entity\DDC\Fichier $fichier
     *
     * @return FDDC
     */
    public function setFichier(\TRC\CoreBundle\Entity\DDC\Fichier $fichier)
    {
        $this->fichier = $fichier;

        return $this;
    }

    /**
     * Get fichier
     *
     * @return \TRC\CoreBundle\Entity\DDC\Fichier
     */
    public function getFichier()
    {
        return $this->fichier;
    }

    /**
     * Set docddc
     *
     * @param \TRC\CoreBundle\Entity\DDC\DOCDDC $docddc
     *
     * @return FDDC
     */
    public function setDocddc(\TRC\CoreBundle\Entity\DDC\DOCDDC $docddc = null)
    {
        $this->docddc = $docddc;

        return $this;
    }

    /**
     * Get docddc
     *
     * @return \TRC\CoreBundle\Entity\DDC\DOCDDC
     */
    public function getDocddc()
    {
        return $this->docddc;
    }

    /**
     * Set fonction
     *
     * @param \TRC\CoreBundle\Entity\Fonction $fonction
     *
     * @return FDDC
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
}
