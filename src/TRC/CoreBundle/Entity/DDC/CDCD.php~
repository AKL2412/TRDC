<?php

namespace TRC\CoreBundle\Entity\DDC;

use Doctrine\ORM\Mapping as ORM;

/**
 * CDCD
 *
 * @ORM\Table(name="c_d_c_d")
 * @ORM\Entity(repositoryClass="TRC\CoreBundle\Repository\DDC\CDCDRepository")
 */
class CDCD
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
     * @ORM\Column(name="montant", type="float")
     */
    private $montant;

    /**
     * @var int
     *
     * @ORM\Column(name="duree", type="integer")
     */
    private $duree;

    /**
     * @var float
     *
     * @ORM\Column(name="quotite", type="float")
     */
    private $quotite;


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
     * Set montant
     *
     * @param float $montant
     *
     * @return CDCD
     */
    public function setMontant($montant)
    {
        $this->montant = $montant;

        return $this;
    }

    /**
     * Get montant
     *
     * @return float
     */
    public function getMontant()
    {
        return $this->montant;
    }

    /**
     * Set duree
     *
     * @param integer $duree
     *
     * @return CDCD
     */
    public function setDuree($duree)
    {
        $this->duree = $duree;

        return $this;
    }

    /**
     * Get duree
     *
     * @return int
     */
    public function getDuree()
    {
        return $this->duree;
    }

    /**
     * Set quotite
     *
     * @param float $quotite
     *
     * @return CDCD
     */
    public function setQuotite($quotite)
    {
        $this->quotite = $quotite;

        return $this;
    }

    /**
     * Get quotite
     *
     * @return float
     */
    public function getQuotite()
    {
        return $this->quotite;
    }
}
