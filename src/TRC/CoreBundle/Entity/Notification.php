<?php

namespace TRC\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Notification
 *
 * @ORM\Table(name="notification")
 * @ORM\Entity(repositoryClass="TRC\CoreBundle\Repository\NotificationRepository")
 */
class Notification
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
     * @ORM\Column(name="titre", type="string",length = 255)
     */
    private $titre;
    /**
     * @var string
     *
     * @ORM\Column(name="contenu", type="text")
     */
    private $contenu;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datenoti", type="datetime")
     */
    private $datenoti;

    /**
     * @var bool
     *
     * @ORM\Column(name="lu", type="boolean")
     */
    private $lu;

    /**
    * @ORM\ManyToOne(targetEntity="TRC\CoreBundle\Entity\Acteur")
    * @ORM\JoinColumn(nullable=true)
    */
    private $acteur;

    /**
    * @ORM\ManyToOne(targetEntity="TRC\CoreBundle\Entity\Entite")
    * @ORM\JoinColumn(nullable=true)
    */
    private $entite;

    public function __construct(){
        $this->lu = false;
        $this->datenoti = new \DateTime();
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
     * Set contenu
     *
     * @param string $contenu
     *
     * @return Notification
     */
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;

        return $this;
    }

    /**
     * Get contenu
     *
     * @return string
     */
    public function getContenu()
    {
        return $this->contenu;
    }

    /**
     * Set datenoti
     *
     * @param \DateTime $datenoti
     *
     * @return Notification
     */
    public function setDatenoti($datenoti)
    {
        $this->datenoti = $datenoti;

        return $this;
    }

    /**
     * Get datenoti
     *
     * @return \DateTime
     */
    public function getDatenoti()
    {
        return $this->datenoti;
    }

    /**
     * Set lu
     *
     * @param boolean $lu
     *
     * @return Notification
     */
    public function setLu($lu)
    {
        $this->lu = $lu;

        return $this;
    }

    /**
     * Get lu
     *
     * @return bool
     */
    public function getLu()
    {
        return $this->lu;
    }

    /**
     * Set titre
     *
     * @param string $titre
     *
     * @return Notification
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set acteur
     *
     * @param \TRC\CoreBundle\Entity\Acteur $acteur
     *
     * @return Notification
     */
    public function setActeur(\TRC\CoreBundle\Entity\Acteur $acteur = null)
    {
        $this->acteur = $acteur;

        return $this;
    }

    /**
     * Get acteur
     *
     * @return \TRC\CoreBundle\Entity\Acteur
     */
    public function getActeur()
    {
        return $this->acteur;
    }

    /**
     * Set entite
     *
     * @param \TRC\CoreBundle\Entity\Entite $entite
     *
     * @return Notification
     */
    public function setEntite(\TRC\CoreBundle\Entity\Entite $entite = null)
    {
        $this->entite = $entite;

        return $this;
    }

    /**
     * Get entite
     *
     * @return \TRC\CoreBundle\Entity\Entite
     */
    public function getEntite()
    {
        return $this->entite;
    }
}
