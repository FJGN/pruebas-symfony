<?php

namespace UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Request;

class InicioController extends Controller {
    
    public function indexAction(Request $request){   
        
        
        
        // Get role of user validate
        $rol = $this->getUser()->getRoles();
        
        // Redirect to type of user account
        switch($rol[0])
        {
            case "ROLE_USER":
                return $this->redirect($this->generateUrl('user'));
                break;
            case "ROLE_ADMIN":
                return $this->redirect($this->generateUrl('admin'));
                break;
            case "ROLE_ROOT":
                return $this->redirect($this->generateUrl('root'));
                break;
            default:
                return $this->redirect($this->generateUrl('inicio'));
                
        }
                
    }
    
    
    public function userAction(Request $request){                        
        
        $usuario = $this->getUser()->getUsername();
        $rol = $this->getUser()->getRoles();
        
        return $this->render(
                'usuarios/inicio.html.twig', array(
                'usuario' => $usuario[0],
                'rol' => $rol[0]
        ));
    }
    
    public function adminAction(Request $request){                        
        $usuario = $this->getUser()->getUsername();
        $rol = $this->getUser()->getRoles();
        
        return $this->render(
                'usuarios/inicio.html.twig', array(
                'usuario' => $usuario[0],
                'rol' => $rol[0]
        ));
    }
    
    public function rootAction(Request $request){                        
        $usuario = $this->getUser()->getUsername();
        $rol = $this->getUser()->getRoles();
        
        return $this->render(
                'usuarios/inicio.html.twig', array(
                'usuario' => $usuario[0],
                'rol' => $rol[0]
        ));
    }
    
    
    
}
