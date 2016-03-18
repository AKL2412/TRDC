<?php

namespace TRC\CoreBundle\Entity\Client;

use Doctrine\ORM\Mapping as ORM;

/**
 * PAC
 *
 * @ORM\Table(name="p_a_c")
 * @ORM\Entity(repositoryClass="TRC\CoreBundle\Repository\Client\PACRepository")
 */
class PAC
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
    * @ORM\OneToOne(targetEntity="TRC\CoreBundle\Entity\Client\Coordonnee",cascade={"remove", "persist"})
    * @ORM\JoinColumn(nullable=false)
    */
    private $coordonnee;

    /**
    * @ORM\ManyToOne(targetEntity="TRC\CoreBundle\Entity\Client\LDP")
    * @ORM\JoinColumn(nullable=true)
    */
    private $lpd;
    
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
     * @return PAC
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
     * @return PAC
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
     * Set coordonnee
     *
     * @param \TRC\CoreBundle\Entity\Client\Coordonnee $coordonnee
     *
     * @return PAC
     */
    public function setCoordonnee(\TRC\CoreBundle\Entity\Client\Coordonnee $coordonnee = null)
    {
        $this->coordonnee = $coordonnee;

        return $this;
    }

    /**
     * Get coordonnee
     *
     * @return \TRC\CoreBundle\Entity\Client\Coordonnee
     */
    public function getCoordonnee()
    {
        return $this->coordonnee;
    }

    /**
     * Set lpd
     *
     * @param \TRC\CoreBundle\Entity\Client\LDP $lpd
     *
     * @return PAC
     */
    public function setLpd(\TRC\CoreBundle\Entity\Client\LDP $lpd = null)
    {
        $this->lpd = $lpd;

        return $this;
    }

    /**
     * Get lpd
     *
     * @return \TRC\CoreBundle\Entity\Client\LDP
     */
    public function getLpd()
    {
        return $this->lpd;
    }
}
