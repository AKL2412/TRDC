<?php

namespace TRC\CoreBundle\Entity\Client;

use Doctrine\ORM\Mapping as ORM;

/**
 * Client
 *
 * @ORM\Table(name="client")
 * @ORM\Entity(repositoryClass="TRC\CoreBundle\Repository\Client\ClientRepository")
 */
class Client
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
     * @ORM\Column(name="radical", type="string", length=20, unique=true)
     */
    private $radical;

    /**
     * @var string
     *
     * @ORM\Column(name="intitule", type="string", length=255, nullable=true)
     */
    private $intitule;

    /**
    * @ORM\OneToOne(targetEntity="TRC\CoreBundle\Entity\Client\Identite",cascade={"remove", "persist"})
    * @ORM\JoinColumn(nullable=true)
    */
    private $identite;

    /**
    * @ORM\OneToOne(targetEntity="TRC\CoreBundle\Entity\Client\Revenu",cascade={"remove", "persist"})
    * @ORM\JoinColumn(nullable=true)
    */
    private $revenu;

    /**
    * @ORM\OneToOne(targetEntity="TRC\CoreBundle\Entity\Client\Logement",cascade={"remove", "persist"})
    * @ORM\JoinColumn(nullable=true)
    */
    private $logement;

    /**
    * @ORM\OneToOne(targetEntity="TRC\CoreBundle\Entity\Client\PAC",cascade={"remove", "persist"})
    * @ORM\JoinColumn(nullable=true)
    */
    private $pac;

    /**
    * @ORM\OneToOne(targetEntity="TRC\CoreBundle\Entity\Client\Coordonnee",cascade={"remove", "persist"})
    * @ORM\JoinColumn(nullable=true)
    */
    private $coordonnee;

    /**
    * @ORM\OneToOne(targetEntity="TRC\CoreBundle\Entity\Client\Profession",cascade={"remove", "persist"})
    * @ORM\JoinColumn(nullable=true)
    */
    private $profession;

     /**
    * @ORM\OneToOne(targetEntity="TRC\CoreBundle\Entity\Client\Employeur",cascade={"remove", "persist"})
    * @ORM\JoinColumn(nullable=true)
    */
    private $employeur;

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
     * Set radical
     *
     * @param string $radical
     *
     * @return Client
     */
    public function setRadical($radical)
    {
        $this->radical = $radical;

        return $this;
    }

    /**
     * Get radical
     *
     * @return string
     */
    public function getRadical()
    {
        return $this->radical;
    }

    /**
     * Set identite
     *
     * @param \TRC\CoreBundle\Entity\Client\Identite $identite
     *
     * @return Client
     */
    public function setIdentite(\TRC\CoreBundle\Entity\Client\Identite $identite = null)
    {
        $this->identite = $identite;

        return $this;
    }

    /**
     * Get identite
     *
     * @return \TRC\CoreBundle\Entity\Client\Identite
     */
    public function getIdentite()
    {
        return $this->identite;
    }

    /**
     * Set revenu
     *
     * @param \TRC\CoreBundle\Entity\Client\Revenu $revenu
     *
     * @return Client
     */
    public function setRevenu(\TRC\CoreBundle\Entity\Client\Revenu $revenu = null)
    {
        $this->revenu = $revenu;

        return $this;
    }

    /**
     * Get revenu
     *
     * @return \TRC\CoreBundle\Entity\Client\Revenu
     */
    public function getRevenu()
    {
        return $this->revenu;
    }

    /**
     * Set logement
     *
     * @param \TRC\CoreBundle\Entity\Client\Logement $logement
     *
     * @return Client
     */
    public function setLogement(\TRC\CoreBundle\Entity\Client\Logement $logement = null)
    {
        $this->logement = $logement;

        return $this;
    }

    /**
     * Get logement
     *
     * @return \TRC\CoreBundle\Entity\Client\Logement
     */
    public function getLogement()
    {
        return $this->logement;
    }

    /**
     * Set pac
     *
     * @param \TRC\CoreBundle\Entity\Client\PAC $pac
     *
     * @return Client
     */
    public function setPac(\TRC\CoreBundle\Entity\Client\PAC $pac = null)
    {
        $this->pac = $pac;

        return $this;
    }

    /**
     * Get pac
     *
     * @return \TRC\CoreBundle\Entity\Client\PAC
     */
    public function getPac()
    {
        return $this->pac;
    }

    /**
     * Set coordonnee
     *
     * @param \TRC\CoreBundle\Entity\Client\Coordonnee $coordonnee
     *
     * @return Client
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
     * Set profession
     *
     * @param \TRC\CoreBundle\Entity\Client\Profession $profession
     *
     * @return Client
     */
    public function setProfession(\TRC\CoreBundle\Entity\Client\Profession $profession = null)
    {
        $this->profession = $profession;

        return $this;
    }

    /**
     * Get profession
     *
     * @return \TRC\CoreBundle\Entity\Client\Profession
     */
    public function getProfession()
    {
        return $this->profession;
    }

    /**
     * Set employeur
     *
     * @param \TRC\CoreBundle\Entity\Client\Employeur $employeur
     *
     * @return Client
     */
    public function setEmployeur(\TRC\CoreBundle\Entity\Client\Employeur $employeur = null)
    {
        $this->employeur = $employeur;

        return $this;
    }

    /**
     * Get employeur
     *
     * @return \TRC\CoreBundle\Entity\Client\Employeur
     */
    public function getEmployeur()
    {
        return $this->employeur;
    }

    /**
     * Set intitule
     *
     * @param string $intitule
     *
     * @return Client
     */
    public function setIntitule($intitule)
    {
        $this->intitule = $intitule;

        return $this;
    }

    /**
     * Get intitule
     *
     * @return string
     */
    public function getIntitule()
    {
        return $this->intitule;
    }
}
