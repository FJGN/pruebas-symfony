<?php

namespace UserBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FormularioController extends Controller {
    
    
    public function indexAction($tipo){
        
        // Redirigir peticion hacia login o registro
        // Si no es ninguna, redirigir a pagina de error.
        // Modificar esta clase
        
        $response = new Response(
                "<html><head></head><body>INCORRECTO</body></html>"
        );
                
        if($tipo == 'login'){
            $response = $this->loginAction();
        }
        elseif($tipo == 'registro'){
            $response = $this->registroAction();
        }
        
        return $response;
    }

    
    public function loginAction(){
        return $this->render(
                'usuarios/login.html.twig',
                array('tipo_formulario' => 'Login')
        );
    }
    
    public function registroAction(){
        return $this->render(
                'usuarios/registro.html.twig',
                array('tipo_formulario' => 'Registro')
        );
    }
    
}
