<?php

namespace TRC\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Journal
 *
 * @ORM\Table(name="journal")
 * @ORM\Entity(repositoryClass="TRC\CoreBundle\Repository\JournalRepository")
 */
class Journal
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
     * @ORM\Column(name="dateajout", type="datetime")
     */
    private $dateajout;

    /**
     * @var string
     *
     * @ORM\Column(name="contenu", type="text")
     */
    private $contenu;

    /**
    * @ORM\ManyToOne(targetEntity="TRC\CoreBundle\Entity\TypeJournal")
    * @ORM\JoinColumn(nullable=true)
    */
    private $type;

    /**
    * @ORM\ManyToOne(targetEntity="TRC\UserBundle\Entity\User",cascade={"remove", "persist"})
    * @ORM\JoinColumn(nullable=true)
    */
    private $user;


    public function __construct(){

        $this->dateajout = new \DateTime();
    }
   
    public function __toString(){

        return 'Type : '.$this->getType()->getCode().
            ' User : '.$this->getUser()->getUsername().
            ' contenu : '.$this->getContenu();
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
     * Set dateajout
     *
     * @param \DateTime $dateajout
     *
     * @return Journal
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
     * Set contenu
     *
     * @param string $contenu
     *
     * @return Journal
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
     * Set type
     *
     * @param \TRC\CoreBundle\Entity\TypeJournal $type
     *
     * @return Journal
     */
    public function setType(\TRC\CoreBundle\Entity\TypeJournal $type = null)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return \TRC\CoreBundle\Entity\TypeJournal
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set user
     *
     * @param \TRC\UserBundle\Entity\User $user
     *
     * @return Journal
     */
    public function setUser(\TRC\UserBundle\Entity\User $user = null)
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
