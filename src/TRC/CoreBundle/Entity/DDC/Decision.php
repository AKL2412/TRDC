<?php

namespace TRC\CoreBundle\Entity\DDC;

use Doctrine\ORM\Mapping as ORM;

/**
 * Etape
 *
 * @ORM\Table(name="decision")
 * @ORM\Entity(repositoryClass="TRC\CoreBundle\Repository\DDC\EtapeRepository")
 */
class Decision
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
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="etats", type="text",nullable=true)
     */
    private $etats;
    /**
     * @var string
     *
     * @ORM\Column(name="details", type="text",nullable=true)
     */
    private $details;


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
     * Set nom
     *
     * @param string $nom
     *
     * @return Etape
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
     * Set details
     *
     * @param string $details
     *
     * @return Decision
     */
    public function setDetails($details)
    {
        $this->details = $details;

        return $this;
    }

    /**
     * Get details
     *
     * @return string
     */
    public function getDetails()
    {
        return $this->details;
    }

    /**
     * Set etats
     *
     * @param string $etats
     *
     * @return Decision
     */
    public function setEtats($etats)
    {
        $this->etats = $etats;

        return $this;
    }

    /**
     * Get etats
     *
     * @return string
     */
    public function getEtats()
    {
        return $this->etats;
    }
}
