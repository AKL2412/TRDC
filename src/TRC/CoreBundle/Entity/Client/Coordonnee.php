<?php

namespace TRC\CoreBundle\Entity\Client;

use Doctrine\ORM\Mapping as ORM;

/**
 * Coordonnee
 *
 * @ORM\Table(name="coordonnee")
 * @ORM\Entity(repositoryClass="TRC\CoreBundle\Repository\Client\CoordonneeRepository")
 */
class Coordonnee
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
     * @ORM\Column(name="adresse", type="text", nullable=true)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="boitePostale", type="string", length=50)
     */
    private $boitePostale;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=255)
     */
    private $ville;

    /**
     * @var string
     *
     * @ORM\Column(name="telephoneProfessionnel", type="string", length=50)
     */
    private $telephoneProfessionnel;

    /**
     * @var string
     *
     * @ORM\Column(name="telephoneDomicile", type="string", length=50)
     */
    private $telephoneDomicile;

    /**
     * @var string
     *
     * @ORM\Column(name="gsm", type="string", length=50, unique=true)
     */
    private $gsm;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=100, unique=true)
     */
    private $email;


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
     * Set adresse
     *
     * @param string $adresse
     *
     * @return Coordonnee
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set boitePostale
     *
     * @param string $boitePostale
     *
     * @return Coordonnee
     */
    public function setBoitePostale($boitePostale)
    {
        $this->boitePostale = $boitePostale;

        return $this;
    }

    /**
     * Get boitePostale
     *
     * @return string
     */
    public function getBoitePostale()
    {
        return $this->boitePostale;
    }

    /**
     * Set ville
     *
     * @param string $ville
     *
     * @return Coordonnee
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

    /**
     * Set telephoneProfessionnel
     *
     * @param string $telephoneProfessionnel
     *
     * @return Coordonnee
     */
    public function setTelephoneProfessionnel($telephoneProfessionnel)
    {
        $this->telephoneProfessionnel = $telephoneProfessionnel;

        return $this;
    }

    /**
     * Get telephoneProfessionnel
     *
     * @return string
     */
    public function getTelephoneProfessionnel()
    {
        return $this->telephoneProfessionnel;
    }

    /**
     * Set telephoneDomicile
     *
     * @param string $telephoneDomicile
     *
     * @return Coordonnee
     */
    public function setTelephoneDomicile($telephoneDomicile)
    {
        $this->telephoneDomicile = $telephoneDomicile;

        return $this;
    }

    /**
     * Get telephoneDomicile
     *
     * @return string
     */
    public function getTelephoneDomicile()
    {
        return $this->telephoneDomicile;
    }

    /**
     * Set gsm
     *
     * @param string $gsm
     *
     * @return Coordonnee
     */
    public function setGsm($gsm)
    {
        $this->gsm = $gsm;

        return $this;
    }

    /**
     * Get gsm
     *
     * @return string
     */
    public function getGsm()
    {
        return $this->gsm;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Coordonnee
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }
}
