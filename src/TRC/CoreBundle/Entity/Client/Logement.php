<?php

namespace TRC\CoreBundle\Entity\Client;

use Doctrine\ORM\Mapping as ORM;

/**
 * Logement
 *
 * @ORM\Table(name="logement")
 * @ORM\Entity(repositoryClass="TRC\CoreBundle\Repository\Client\LogementRepository")
 */
class Logement
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
     * @ORM\Column(name="flm", type="float", nullable=true)
     */
    private $flm;

    /**
    * @ORM\ManyToOne(targetEntity="TRC\CoreBundle\Entity\Client\StatutLogement")
    * @ORM\JoinColumn(nullable=false)
    */
    private $statut;

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
     * Set flm
     *
     * @param float $flm
     *
     * @return Logement
     */
    public function setFlm($flm)
    {
        $this->flm = $flm;

        return $this;
    }

    /**
     * Get flm
     *
     * @return float
     */
    public function getFlm()
    {
        return $this->flm;
    }

    /**
     * Set statut
     *
     * @param \TRC\CoreBundle\Entity\Client\StatutLogement $statut
     *
     * @return Logement
     */
    public function setStatut(\TRC\CoreBundle\Entity\Client\StatutLogement $statut)
    {
        $this->statut = $statut;

        return $this;
    }

    /**
     * Get statut
     *
     * @return \TRC\CoreBundle\Entity\Client\StatutLogement
     */
    public function getStatut()
    {
        return $this->statut;
    }
}
