<?php

namespace TRC\CoreBundle\Entity\Client;

use Doctrine\ORM\Mapping as ORM;

/**
 * Employeur
 *
 * @ORM\Table(name="employeur")
 * @ORM\Entity(repositoryClass="TRC\CoreBundle\Repository\Client\EmployeurRepository")
 */
class Employeur
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
     * @ORM\Column(name="denomination", type="string", length=255)
     */
    private $denomination;

    /**
     * @var string
     *
     * @ORM\Column(name="adresseSociale", type="text", nullable=true)
     */
    private $adresseSociale;

    /**
     * @var string
     *
     * @ORM\Column(name="telephone", type="string", length=50)
     */
    private $telephone;

    /**
     * @var string
     *
     * @ORM\Column(name="fax", type="string", length=50)
     */
    private $fax;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=255)
     */
    private $ville;


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
     * Set denomination
     *
     * @param string $denomination
     *
     * @return Employeur
     */
    public function setDenomination($denomination)
    {
        $this->denomination = $denomination;

        return $this;
    }

    /**
     * Get denomination
     *
     * @return string
     */
    public function getDenomination()
    {
        return $this->denomination;
    }

    /**
     * Set adresseSociale
     *
     * @param string $adresseSociale
     *
     * @return Employeur
     */
    public function setAdresseSociale($adresseSociale)
    {
        $this->adresseSociale = $adresseSociale;

        return $this;
    }

    /**
     * Get adresseSociale
     *
     * @return string
     */
    public function getAdresseSociale()
    {
        return $this->adresseSociale;
    }

    /**
     * Set telephone
     *
     * @param string $telephone
     *
     * @return Employeur
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return string
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set fax
     *
     * @param string $fax
     *
     * @return Employeur
     */
    public function setFax($fax)
    {
        $this->fax = $fax;

        return $this;
    }

    /**
     * Get fax
     *
     * @return string
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Set ville
     *
     * @param string $ville
     *
     * @return Employeur
     */
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return string
     */
    public function getVille()
    {
        return $this->ville;
    }
}
