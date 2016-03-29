<?php

namespace TRC\CoreBundle\Entity\DDC;

use Doctrine\ORM\Mapping as ORM;

/**
 * DDC
 *
 * @ORM\Table(name="d_d_c")
 * @ORM\Entity(repositoryClass="TRC\CoreBundle\Repository\DDC\DDCRepository")
 */
class DDC
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
     * @ORM\Column(name="rs", type="string", length=255)
     */
    private $rs;

    /**
     * @var string
     *
     * @ORM\Column(name="rc", type="string", length=255,nullable=true)
     */
    private $rc;

    /**
     * @var string
     *
     * @ORM\Column(name="ordre", type="string", length=20,nullable=true)
     */
    private $ordre;

    /**
     * @var string
     *
     * @ORM\Column(name="dossier", type="string", length=255)
     */
    private $dossier;

    /**
    * @ORM\ManyToOne(targetEntity="TRC\CoreBundle\Entity\Client\Client")
    * @ORM\JoinColumn(nullable=true)
    */
    private $client;

    /**
    * @ORM\ManyToOne(targetEntity="TRC\CoreBundle\Entity\DDC\TDDC")
    * @ORM\JoinColumn(nullable=false)
    */
    private $tddc;

    /**
    * @ORM\ManyToOne(targetEntity="TRC\CoreBundle\Entity\DDC\TDC")
    * @ORM\JoinColumn(nullable=false)
    */
    private $tdc;

    /**
    * @ORM\OneToOne(targetEntity="TRC\CoreBundle\Entity\DDC\EDP",cascade={"remove", "persist"})
    * @ORM\JoinColumn(nullable=false)
    */
    private $edp;

    /**
    * @ORM\OneToOne(targetEntity="TRC\CoreBundle\Entity\DDC\CDCD",cascade={"remove", "persist"})
    * @ORM\JoinColumn(nullable=true)
    */
    private $cdcd;

    /**
    * @ORM\ManyToOne(targetEntity="TRC\CoreBundle\Entity\Fonction")
    * @ORM\JoinColumn(nullable=false)
    */
    private $fonction;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="at", type="datetime",nullable=true)
     */
    protected $at;

    /**
    * @ORM\ManyToOne(targetEntity="TRC\CoreBundle\Entity\DDC\PDDC")
    * @ORM\JoinColumn(nullable=true)
    */
    private $phaseActuelle;

    /**
    * @ORM\ManyToOne(targetEntity="TRC\CoreBundle\Entity\DDC\EDDC")
    * @ORM\JoinColumn(nullable=true)
    */
    private $etatActuel;

    public function resume(){
        $resume = "";
        

        return $resume;
    }
    


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set rs
     *
     * @param string $rs
     *
     * @return DDC
     */
    public function setRs($rs)
    {
        $this->rs = $rs;

        return $this;
    }

    /**
     * Get rs
     *
     * @return string
     */
    public function getRs()
    {
        return $this->rs;
    }

    /**
     * Set rc
     *
     * @param string $rc
     *
     * @return DDC
     */
    public function setRc($rc)
    {
        $this->rc = $rc;

        return $this;
    }

    /**
     * Get rc
     *
     * @return string
     */
    public function getRc()
    {
        return $this->rc;
    }

    /**
     * Set ordre
     *
     * @param string $ordre
     *
     * @return DDC
     */
    public function setOrdre($ordre)
    {
        $this->ordre = $ordre;

        return $this;
    }

    /**
     * Get ordre
     *
     * @return string
     */
    public function getOrdre()
    {
        return $this->ordre;
    }

    /**
     * Set dossier
     *
     * @param string $dossier
     *
     * @return DDC
     */
    public function setDossier($dossier)
    {
        $this->dossier = $dossier;

        return $this;
    }

    /**
     * Get dossier
     *
     * @return string
     */
    public function getDossier()
    {
        return $this->dossier;
    }

    /**
     * Set at
     *
     * @param \DateTime $at
     *
     * @return DDC
     */
    public function setAt($at)
    {
        $this->at = $at;

        return $this;
    }

    /**
     * Get at
     *
     * @return \DateTime
     */
    public function getAt()
    {
        return $this->at;
    }

    /**
     * Set client
     *
     * @param \TRC\CoreBundle\Entity\Client\Client $client
     *
     * @return DDC
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

    /**
     * Set tddc
     *
     * @param \TRC\CoreBundle\Entity\DDC\TDDC $tddc
     *
     * @return DDC
     */
    public function setTddc(\TRC\CoreBundle\Entity\DDC\TDDC $tddc)
    {
        $this->tddc = $tddc;

        return $this;
    }

    /**
     * Get tddc
     *
     * @return \TRC\CoreBundle\Entity\DDC\TDDC
     */
    public function getTddc()
    {
        return $this->tddc;
    }

    /**
     * Set tdc
     *
     * @param \TRC\CoreBundle\Entity\DDC\TDC $tdc
     *
     * @return DDC
     */
    public function setTdc(\TRC\CoreBundle\Entity\DDC\TDC $tdc)
    {
        $this->tdc = $tdc;

        return $this;
    }

    /**
     * Get tdc
     *
     * @return \TRC\CoreBundle\Entity\DDC\TDC
     */
    public function getTdc()
    {
        return $this->tdc;
    }

    /**
     * Set edp
     *
     * @param \TRC\CoreBundle\Entity\DDC\EDP $edp
     *
     * @return DDC
     */
    public function setEdp(\TRC\CoreBundle\Entity\DDC\EDP $edp)
    {
        $this->edp = $edp;

        return $this;
    }

    /**
     * Get edp
     *
     * @return \TRC\CoreBundle\Entity\DDC\EDP
     */
    public function getEdp()
    {
        return $this->edp;
    }

    /**
     * Set cdcd
     *
     * @param \TRC\CoreBundle\Entity\DDC\CDCD $cdcd
     *
     * @return DDC
     */
    public function setCdcd(\TRC\CoreBundle\Entity\DDC\CDCD $cdcd = null)
    {
        $this->cdcd = $cdcd;

        return $this;
    }

    /**
     * Get cdcd
     *
     * @return \TRC\CoreBundle\Entity\DDC\CDCD
     */
    public function getCdcd()
    {
        return $this->cdcd;
    }

    /**
     * Set fonction
     *
     * @param \TRC\CoreBundle\Entity\Fonction $fonction
     *
     * @return DDC
     */
    public function setFonction(\TRC\CoreBundle\Entity\Fonction $fonction)
    {
        $this->fonction = $fonction;

        return $this;
    }

    /**
     * Get fonction
     *
     * @return \TRC\CoreBundle\Entity\Fonction
     */
    public function getFonction()
    {
        return $this->fonction;
    }

    /**
     * Set phaseActuelle
     *
     * @param \TRC\CoreBundle\Entity\DDC\PDDC $phaseActuelle
     *
     * @return DDC
     */
    public function setPhaseActuelle(\TRC\CoreBundle\Entity\DDC\PDDC $phaseActuelle = null)
    {
        $this->phaseActuelle = $phaseActuelle;

        return $this;
    }

    /**
     * Get phaseActuelle
     *
     * @return \TRC\CoreBundle\Entity\DDC\PDDC
     */
    public function getPhaseActuelle()
    {
        return $this->phaseActuelle;
    }

    /**
     * Set etatActuel
     *
     * @param \TRC\CoreBundle\Entity\DDC\EDDC $etatActuel
     *
     * @return DDC
     */
    public function setEtatActuel(\TRC\CoreBundle\Entity\DDC\EDDC $etatActuel = null)
    {
        $this->etatActuel = $etatActuel;

        return $this;
    }

    /**
     * Get etatActuel
     *
     * @return \TRC\CoreBundle\Entity\DDC\EDDC
     */
    public function getEtatActuel()
    {
        return $this->etatActuel;
    }
}
