<?php

namespace TRC\CoreBundle\Entity\Client;

use Doctrine\ORM\Mapping as ORM;

/**
 * CEC
 *
 * @ORM\Table(name="c_e_c")
 * @ORM\Entity(repositoryClass="TRC\CoreBundle\Repository\Client\CECRepository")
 */
class CEC
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
     * @var \DateTime
     *
     * @ORM\Column(name="datedeblocage", type="datetime")
     */
    private $datedeblocage;

    /**
     * @var int
     *
     * @ORM\Column(name="duree", type="integer")
     */
    private $duree;

    /**
     * @var float
     *
     * @ORM\Column(name="mensualite", type="float")
     */
    private $mensualite;

    /**
    * @ORM\ManyToOne(targetEntity="TRC\CoreBundle\Entity\Client\Client",cascade={"remove", "persist"})
    * @ORM\JoinColumn(nullable=true)
    */
    private $client;

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
     * @return CEC
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
     * Set datedeblocage
     *
     * @param \DateTime $datedeblocage
     *
     * @return CEC
     */
    public function setDatedeblocage($datedeblocage)
    {
        $this->datedeblocage = $datedeblocage;

        return $this;
    }

    /**
     * Get datedeblocage
     *
     * @return \DateTime
     */
    public function getDatedeblocage()
    {
        return $this->datedeblocage;
    }

    /**
     * Set duree
     *
     * @param integer $duree
     *
     * @return CEC
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
     * Set mensualite
     *
     * @param float $mensualite
     *
     * @return CEC
     */
    public function setMensualite($mensualite)
    {
        $this->mensualite = $mensualite;

        return $this;
    }

    /**
     * Get mensualite
     *
     * @return float
     */
    public function getMensualite()
    {
        return $this->mensualite;
    }

    /**
     * Set client
     *
     * @param \TRC\CoreBundle\Entity\Client\Client $client
     *
     * @return CEC
     */
    public function setClient(\TRC\CoreBundle\Entity\Client\Client $client = null)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Get client
     *
     * @return \TRC\CoreBundle\Entity\Client\Client
     */
    public function getClient()
    {
        return $this->client;
    }
}
