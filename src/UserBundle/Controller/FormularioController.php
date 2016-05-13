<?php

namespace UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FormularioController extends Controller {
    
    
    public function indexAction($tipo){
        
        // Redirigir peticion hacia login o registro
        
    }

    
    public function loginAction(){
        return $this->render(
                'usuarios/formulario.html.twig',
                array('tipo' => 'Login')
        );
    }
    
    public function registroAction(){
        return $this->render(
                'usuarios/formulario.html.twig',
                array('tipo' => 'Registro')
        );
    }
    
}
