<?php

namespace GoGreat\BaseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BaseController extends Controller
{
	/**
	 * @return Symfony\Component\HttpFoundation\Request
	 */
	protected function getRequest() { return $this->get('request'); }
	
	/**
	 * @return Doctrine\ORM\EntityManager
	 */
	protected function getEntityManager() { return $this->get('doctrine.orm.entity_manager'); }
	
	/**
	 * @return GoGreat\UserBundle\Entity\User
	 */
	protected function getLoggedInUser()
	{    
		$user = ($this->get('security.context')->getToken()) ? $this->get('security.context')->getToken()->getUser() : null;
    	$user = (is_object($user) ? $user : null);
    	
		return $user;
	}
}
