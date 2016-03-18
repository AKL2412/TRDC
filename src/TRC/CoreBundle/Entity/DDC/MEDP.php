<?php

namespace TRC\CoreBundle\Entity\DDC;

use Doctrine\ORM\Mapping as ORM;

/**
 * MEDP
 *
 * @ORM\Table(name="m_e_d_p")
 * @ORM\Entity(repositoryClass="TRC\CoreBundle\Repository\DDC\MEDPRepository")
 */
class MEDP
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
     * @var \DateTime
     *
     * @ORM\Column(name="dateposte", type="datetime")
     */
    private $dateposte;

    /**
     * @var string
     *
     * @ORM\Column(name="message", type="text")
     */
    private $message;

    /**
    * @ORM\ManyToOne(targetEntity="TRC\CoreBundle\Entity\DDC\EDP")
    * @ORM\JoinColumn(nullable=false)
    */
    private $edp;

    /**
    * @ORM\ManyToOne(targetEntity="TRC\UserBundle\Entity\User")
    * @ORM\JoinColumn(nullable=false)
    */
    private $user;


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
     * Set dateposte
     *
     * @param \DateTime $dateposte
     *
     * @return MEDP
     */
    public function setDateposte($dateposte)
    {
        $this->dateposte = $dateposte;

        return $this;
    }

    /**
     * Get dateposte
     *
     * @return \DateTime
     */
    public function getDateposte()
    {
        return $this->dateposte;
    }

    /**
     * Set message
     *
     * @param string $message
     *
     * @return MEDP
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set edp
     *
     * @param \TRC\CoreBundle\Entity\DDC\EDP $edp
     *
     * @return MEDP
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
     * Set user
     *
     * @param \TRC\UserBundle\Entity\User $user
     *
     * @return MEDP
     */
    public function setUser(\TRC\UserBundle\Entity\User $user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \TRC\UserBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }
}
