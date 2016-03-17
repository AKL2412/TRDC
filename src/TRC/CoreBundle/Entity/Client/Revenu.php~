<?php

namespace TRC\CoreBundle\Entity\Client;

use Doctrine\ORM\Mapping as ORM;

/**
 * Revenu
 *
 * @ORM\Table(name="revenu")
 * @ORM\Entity(repositoryClass="TRC\CoreBundle\Repository\Client\RevenuRepository")
 */
class Revenu
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
     * @ORM\Column(name="rsmn", type="float")
     */
    private $rsmn;

    /**
     * @var string
     *
     * @ORM\Column(name="natureAutresRevenus", type="string", length=255)
     */
    private $natureAutresRevenus;

    /**
     * @var float
     *
     * @ORM\Column(name="montant", type="float", nullable=true)
     */
    private $montant;

    /**
     * @var string
     *
     * @ORM\Column(name="periodicite", type="string", length=255)
     */
    private $periodicite;


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
     * Set rsmn
     *
     * @param float $rsmn
     *
     * @return Revenu
     */
    public function setRsmn($rsmn)
    {
        $this->rsmn = $rsmn;

        return $this;
    }

    /**
     * Get rsmn
     *
     * @return float
     */
    public function getRsmn()
    {
        return $this->rsmn;
    }

    /**
     * Set natureAutresRevenus
     *
     * @param string $natureAutresRevenus
     *
     * @return Revenu
     */
    public function setNatureAutresRevenus($natureAutresRevenus)
    {
        $this->natureAutresRevenus = $natureAutresRevenus;

        return $this;
    }

    /**
     * Get natureAutresRevenus
     *
     * @return string
     */
    public function getNatureAutresRevenus()
    {
        return $this->natureAutresRevenus;
    }

    /**
     * Set montant
     *
     * @param float $montant
     *
     * @return Revenu
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
     * Set periodicite
     *
     * @param string $periodicite
     *
     * @return Revenu
     */
    public function setPeriodicite($periodicite)
    {
        $this->periodicite = $periodicite;

        return $this;
    }

    /**
     * Get periodicite
     *
     * @return string
     */
    public function getPeriodicite()
    {
        return $this->periodicite;
    }
}
