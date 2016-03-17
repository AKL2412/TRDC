<?php

namespace TRC\CoreBundle\Entity\Client;

use Doctrine\ORM\Mapping as ORM;

/**
 * Identite
 *
 * @ORM\Table(name="identite")
 * @ORM\Entity(repositoryClass="TRC\CoreBundle\Repository\Client\IdentiteRepository")
 */
class Identite
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
     * @ORM\Column(name="prenom", type="string", length=255)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="numeroPiece", type="string", length=50)
     */
    private $numeroPiece;

    /**
    * @ORM\ManyToOne(targetEntity="TRC\CoreBundle\Entity\Client\Piece")
    * @ORM\JoinColumn(nullable=false)
    */
    private $piece;
    /**
    * @ORM\ManyToOne(targetEntity="TRC\CoreBundle\Entity\Client\Civilite")
    * @ORM\JoinColumn(nullable=false)
    */
    private $civilite;

    /**
    * @ORM\ManyToOne(targetEntity="TRC\CoreBundle\Entity\Client\Pays")
    * @ORM\JoinColumn(nullable=false)
    */
    private $pays;

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
     * @return Identite
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
     * Set prenom
     *
     * @param string $prenom
     *
     * @return Identite
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set numeroPiece
     *
     * @param string $numeroPiece
     *
     * @return Identite
     */
    public function setNumeroPiece($numeroPiece)
    {
        $this->numeroPiece = $numeroPiece;

        return $this;
    }

    /**
     * Get numeroPiece
     *
     * @return string
     */
    public function getNumeroPiece()
    {
        return $this->numeroPiece;
    }

    /**
     * Set piece
     *
     * @param \TRC\CoreBundle\Entity\Client\Piece $piece
     *
     * @return Identite
     */
    public function setPiece(\TRC\CoreBundle\Entity\Client\Piece $piece)
    {
        $this->piece = $piece;

        return $this;
    }

    /**
     * Get piece
     *
     * @return \TRC\CoreBundle\Entity\Client\Piece
     */
    public function getPiece()
    {
        return $this->piece;
    }

    /**
     * Set civilite
     *
     * @param \TRC\CoreBundle\Entity\Client\Civilite $civilite
     *
     * @return Identite
     */
    public function setCivilite(\TRC\CoreBundle\Entity\Client\Civilite $civilite)
    {
        $this->civilite = $civilite;

        return $this;
    }

    /**
     * Get civilite
     *
     * @return \TRC\CoreBundle\Entity\Client\Civilite
     */
    public function getCivilite()
    {
        return $this->civilite;
    }

    /**
     * Set pays
     *
     * @param \TRC\CoreBundle\Entity\Client\Pays $pays
     *
     * @return Identite
     */
    public function setPays(\TRC\CoreBundle\Entity\Client\Pays $pays)
    {
        $this->pays = $pays;

        return $this;
    }

    /**
     * Get pays
     *
     * @return \TRC\CoreBundle\Entity\Client\Pays
     */
    public function getPays()
    {
        return $this->pays;
    }
}
