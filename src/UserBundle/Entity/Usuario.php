<?php

namespace UserBundle\Entity;

use Symfony\Component\Validator\Constraint as Validacion;

class Usuario {
    
    private $user, $password, $rol;
    
    public function getUser(){
        return $this->user;
    }
   
    /*
     * @Validacion\NotBlank()
     */
    public function setUser($user){
        $this->user = $user;
    }
        
    public function getPassword(){
        return $this->password;
    }
    
    /*
     * @Validacion\NotBlank()     
     */
    public function setPassword($password){
        $this->password = $password;
    }
    
    public function getRol(){
        return $this->rol;
    }
    
    /*
     * @Validacion\Choice(choices = {"usuario","administrador","root"}, expanded = true, multiple = false, data = "root")
     */
    public function setRol($rol){
        $this->rol = $rol;
    }
    
}
