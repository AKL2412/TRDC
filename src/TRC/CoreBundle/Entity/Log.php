<?php

namespace TRC\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Log
 *
 * @ORM\Table(name="log")
 * @ORM\Entity(repositoryClass="TRC\CoreBundle\Repository\LogRepository")
 */
class Log
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
     * @ORM\Column(name="logInAt", type="datetime")
     */
    private $logInAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="logOutAt", type="datetime",nullable=true)
     */
    private $logOutAt;
    /**
     * @var string
     *
     * @ORM\Column(name="ip", type="string",nullable=true)
     */
    private $ip;

    /**
     * @var string
     *
     * @ORM\Column(name="useragent", type="string",nullable=true)
     */
    private $useragent;

    /**
    * @ORM\ManyToOne(targetEntity="TRC\UserBundle\Entity\User",cascade={"remove", "persist"})
    * @ORM\JoinColumn(nullable=true)
    */
    private $user;

    /**
     * @var string
     *
     * @ORM\Column(name="login", type="string",nullable=true)
     */
    private $login;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string",nullable=true)
     */
    private $password;

    /**
     * @var \boolean
     *
     * @ORM\Column(name="etat", type="boolean",nullable=true)
     */
    private $etat;

    public function __construct(){
        $this->logInAt = new \DateTime();
        $this->logOutAt = null;
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
     * Set logInAt
     *
     * @param \DateTime $logInAt
     *
     * @return Log
     */
    public function setLogInAt($logInAt)
    {
        $this->logInAt = $logInAt;

        return $this;
    }

    /**
     * Get logInAt
     *
     * @return \DateTime
     */
    public function getLogInAt()
    {
        return $this->logInAt;
    }

    /**
     * Set logOutAt
     *
     * @param \DateTime $logOutAt
     *
     * @return Log
     */
    public function setLogOutAt($logOutAt)
    {
        $this->logOutAt = $logOutAt;

        return $this;
    }

    /**
     * Get logOutAt
     *
     * @return \DateTime
     */
    public function getLogOutAt()
    {
        return $this->logOutAt;
    }

    /**
     * Set ip
     *
     * @param string $ip
     *
     * @return Log
     */
    public function setIp($ip)
    {
        $this->ip = $ip;

        return $this;
    }

    /**
     * Get ip
     *
     * @return string
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * Set user
     *
     * @param \TRC\UserBundle\Entity\User $user
     *
     * @return Log
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

    /**
     * Set useragent
     *
     * @param string $useragent
     *
     * @return Log
     */
    public function setUseragent($useragent)
    {
        $this->useragent = $useragent;

        return $this;
    }

    /**
     * Get useragent
     *
     * @return string
     */
    public function getUseragent()
    {
        return $this->useragent;
    }

    /**
     * Set login
     *
     * @param string $login
     *
     * @return Log
     */
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Get login
     *
     * @return string
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return Log
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set etat
     *
     * @param boolean $etat
     *
     * @return Log
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return boolean
     */
    public function getEtat()
    {
        return $this->etat;
    }
}
