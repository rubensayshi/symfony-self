<?php

namespace GoGreat\UserBundle\Entity;
use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * GoGreat\UserBundle\Entity\User
 */
class User implements UserInterface
{
    /**
     * @var string $username
     */
    private $username;

    /**
     * @var string $password
     */
    private $password;

    /**
     * @var string $email
     */
    private $email;

    /**
     * @var array $roles
     */
    private $roles;

    /**
     * @var GoGreat\UserBundle\Entity\Address
     */
    private $adresses;
    

    /**
     * Set username
     *
     * @param string $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * Get username
     *
     * @return string $username
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set password
     *
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * Get password
     *
     * @return string $password
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set email
     *
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * Get email
     *
     * @return string $email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set roles
     *
     * @param array $roles
     */
    public function setRoles($roles)
    {
        $this->roles = $roles;
    }

    /**
     * Get roles
     *
     * @return array $roles
     */
    public function getRoles()
    {
        return $this->roles;
    }
 
    function getSalt()
    {
    	return '';
    }
    
    function eraseCredentials() 
    {
    	$this->password = '';	
    }
    
    function equals(UserInterface $user)
    {
    	return $user->getUsername() == $this->getUsername();
    }
    
    /**
     * Add adresses
     *
     * @param GoGreat\UserBundle\Entity\Address $adresses
     */
    public function addAdresses(\GoGreat\UserBundle\Entity\Address $adresses)
    {
        $this->adresses[] = $adresses;
    }

    /**
     * Get adresses
     *
     * @return Doctrine\Common\Collections\Collection $adresses
     */
    public function getAdresses()
    {
        return $this->adresses;
    }
}