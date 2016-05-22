<?php

namespace UserBundle\Entity;

use Symfony\Component\Validator\Constraints as Validacion;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\UserInterface;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="Usuario")
 * @UniqueEntity(fields="username", message= "El nombre de usuario no es válido porque ya esta cogido")
 */
class Usuario implements UserInterface, \Serializable
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, unique=true)
     * @Validacion\NotBlank()
     */
    private $username;
    
    /**
     * @Validacion\NotBlank()
     * @Validacion\Length(max=4096)
     */
    private $plainPassword;
    /**
     * @ORM\Column(type="string", length=64)
     */
    private $password;

    /**
     * @ORM\Column(type="string", length=25)
     */
    private $role;

    public function getUsername()
    {
        return $this->username;
    }

    public function getSalt()
    {
        return null;
    }
    function setUsername($username) {
        $this->username = $username;
    }

        public function getPassword()
    {
        return $this->password;
    }
    function setId($id) {
        $this->id = $id;
    }

    function setPassword($password) {
        $this->password = $password;
    }

    function setRole($role) {
        $this->role = $role;
    }

        public function getRoles()
    {
        return $this->role;
    }
    
    function getPlainPassword() {
        return $this->plainPassword;
    }

    function setPlainPassword($plainPassword) {
        $this->plainPassword = $plainPassword;
    }

        
    public function eraseCredentials()
    {
    }

    /** @see \Serializable::serialize() */
    public function serialize()
    {
        return serialize(array(
            $this->id,
            $this->username,
            $this->password,
            // see section on salt below
            // $this->salt,
        ));
    }

    /** @see \Serializable::unserialize() */
    public function unserialize($serialized)
    {
        list (
            $this->id,
            $this->username,
            $this->password,
            // see section on salt below
            // $this->salt
        ) = unserialize($serialized);
    }
}
