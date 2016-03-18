<?php

namespace TRC\UserBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="compte")
 */
class User extends BaseUser  
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    
    public function __construct()
    {
        parent::__construct();
        // your own logic
    }

   

    /**
     * Set timeUpdate
     *
     * @param \DateTime $timeUpdate
     *
     * @return User
     */
    public function setTimeUpdate($timeUpdate)
    {
        $this->timeUpdate = $timeUpdate;

        return $this;
    }

    /**
     * Get timeUpdate
     *
     * @return \DateTime
     */
    public function getTimeUpdate()
    {
        return $this->timeUpdate;
    }

    /**
     * Set logged
     *
     * @param boolean $logged
     *
     * @return User
     */
    public function setLogged($logged)
    {
        $this->logged = $logged;

        return $this;
    }

    /**
     * Get logged
     *
     * @return boolean
     */
    public function getLogged()
    {
        return $this->logged;
    }

    /**
     * Set logIn
     *
     * @param \TRC\CoreBundle\Entity\Log $logIn
     *
     * @return User
     */
    public function setLogIn(\TRC\CoreBundle\Entity\Log $logIn = null)
    {
        $this->logIn = $logIn;

        return $this;
    }

    /**
     * Get logIn
     *
     * @return \TRC\CoreBundle\Entity\Log
     */
    public function getLogIn()
    {
        return $this->logIn;
    }
}
