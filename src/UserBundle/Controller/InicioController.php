<?php

namespace UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class InicioController extends Controller {
    
    public function indexAction(){
        // Check type of user and send data to template
        
        return $this->render('usuarios/inicio.html.twig');
    }
}
