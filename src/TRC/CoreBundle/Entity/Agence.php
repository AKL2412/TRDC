<?php

namespace TRC\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Agence
 *
 * @ORM\Table(name="agence")
 * @ORM\Entity(repositoryClass="TRC\CoreBundle\Repository\AgenceRepository")
 */
class Agence 
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
     * @ORM\Column(name="matricule", type="string", length=255,unique =true)
     */
    private $matricule;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateajout", type="datetime")
     */
    private $dateajout;

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=50,unique =true)
     */
    private $code;

    /**
    * @ORM\OneToOne(targetEntity="TRC\CoreBundle\Entity\Entite",cascade={"remove", "persist"})
    * @ORM\JoinColumn(nullable=true)
    */
    private $entite;

    public function __construct(){
        $this->dateajout = new \DateTime();
    }

    /**
    * String representation of this object
    * @return string
    */
    public function __toString(){

        
       // try {
            $temp = explode("\\", get_class($this));
            $classe = $temp[count($temp) - 1];
            $message = "<h5>".strtoupper($classe).":".$this->getCode()."</h5>".
                        "nom:<strong>".$this->getNom().'</strong>'.
                        "<p>Détails:".$this->getDescription()."</p>";
            return $message;
        //} catch (Exception $exception) {
         //   return 'ERREUR de Détails';
        //}
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
     * Set nom
     *
     * @param string $nom
     *
     * @return Entite
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
     * Set description
     *
     * @param string $description
     *
     * @return Entite
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set dateajout
     *
     * @param \DateTime $dateajout
     *
     * @return Entite
     */
    public function setDateajout($dateajout)
    {
        $this->dateajout = $dateajout;

        return $this;
    }

    /**
     * Get dateajout
     *
     * @return \DateTime
     */
    public function getDateajout()
    {
        return $this->dateajout;
    }

    /**
     * Set code
     *
     * @param string $code
     *
     * @return Entite
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set matricule
     *
     * @param string $matricule
     *
     * @return Entite
     */
    public function setMatricule($matricule)
    {
        $this->matricule = $matricule;

        return $this;
    }

    /**
     * Get matricule
     *
     * @return string
     */
    public function getMatricule()
    {
        return $this->matricule;
    }

    /**
     * Set entite
     *
     * @param \TRC\CoreBundle\Entity\Entite $entite
     *
     * @return Agence
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
