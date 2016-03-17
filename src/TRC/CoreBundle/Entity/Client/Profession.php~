<?php

namespace TRC\CoreBundle\Entity\Client;

use Doctrine\ORM\Mapping as ORM;

/**
 * Profession
 *
 * @ORM\Table(name="profession")
 * @ORM\Entity(repositoryClass="TRC\CoreBundle\Repository\Client\ProfessionRepository")
 */
class Profession
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
     * @ORM\Column(name="fonction", type="string", length=255)
     */
    private $fonction;

    /**
    * @ORM\ManyToOne(targetEntity="TRC\CoreBundle\Entity\Client\TypeFonction")
    * @ORM\JoinColumn(nullable=false)
    */
    private $typefonction;

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
     * Set fonction
     *
     * @param string $fonction
     *
     * @return Profession
     */
    public function setFonction($fonction)
    {
        $this->fonction = $fonction;

        return $this;
    }

    /**
     * Get fonction
     *
     * @return string
     */
    public function getFonction()
    {
        return $this->fonction;
    }

    /**
     * Set typefonction
     *
     * @param \TRC\CoreBundle\Entity\Client\TypeFonction $typefonction
     *
     * @return Profession
     */
    public function setTypefonction(\TRC\CoreBundle\Entity\Client\TypeFonction $typefonction)
    {
        $this->typefonction = $typefonction;

        return $this;
    }

    /**
     * Get typefonction
     *
     * @return \TRC\CoreBundle\Entity\Client\TypeFonction
     */
    public function getTypefonction()
    {
        return $this->typefonction;
    }
}
