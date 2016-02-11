<?php 
namespace  TRC\CoreBundle\Connected;
use TRC\CoreBundle\Entity\Log;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Event\AuthenticationFailureEvent;
use Symfony\Component\Security\Core\Event\AuthenticationEvent;
use Symfony\Component\HttpFoundation\Session\Session;

class Connected{

	protected $em;

	public function setEntityManager(ObjectManager $em){
	   $this->em = $em;
	}

	public function onKernelLogOk(AuthenticationEvent $event){

		$ip = $_SERVER['REMOTE_ADDR'];
		$useragent = $_SERVER['HTTP_USER_AGENT'];
		$token = $event->getAuthenticationToken();
		$user = $token->getUser();
		if(gettype($user) != 'string'){
			
			


			$log = new Log();
			$log->setUser($user);
			$log->setIp($ip);
			$log->setEtat(true);
			$log->setUseragent($useragent);
			$this->em->persist($log);


			$user->setLogged(true);
			$user->setTimeUpdate(new \DateTime());
			$user->setLogIn($log);


			$this->em->flush();
		}
	}
}