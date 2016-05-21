<?php

namespace UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use UserBundle\Entity\Usuario;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class FormularioController extends Controller {  

    public function formAction($tipo, Request $request) {

        if ($tipo == 'login' || $tipo == 'registro') {
            
            
            
            // if user already login/register, show other page
            
            
            
            
            $tipo_formulario = ($tipo == 'login') ? 'Login' : 'Registrar';

            $form = $this->createFormBuilder(new Usuario())
                    ->add('user', TextType::class, array('label' => 'Usuario'))
                    ->add('password', PasswordType::class, array('label' => 'Contraseña'));
            

            if ($tipo_formulario == 'Registrar') {
                $form = $form->add(
                        'rol', ChoiceType::class, array('label' => 'Selecciona un rol',
                                'choices' => array(
                                    'Usuario' => 'user',
                                    'Administrador' => 'admin',
                                    'Root' => 'root'
                                ),
                                'expanded' => true,
                                'multiple' => false,
                                'data' => 'user'
                ));
            }

            $form = $form->add('enviar', SubmitType::class, array('label' => $tipo_formulario))
                        ->getForm();


            $form->handleRequest($request);

            if ($form->isValid()) {
                $data = array(
                    'Usuario' => $form->get('user')->getData(),
                    'Contra' => $form->get('password')->getData()                    
                );

                if ($tipo_formulario == 'Registrar') {
                    array_push($data, array('Rol' => $form->get('rol')->getData()));
                    
                    $signup_success = true;
                    
                    
                    // ================================================
                    // check user if exists
                    // false: show errors
                    // true: save data and redirect to success page
                    // ================================================
                    
                    if($signup_success){
                        // Save data and change session to this user
                        
                        return $this->render('usuarios/exito.html.twig');
                    }            
                    else{
                        // Errors
                    }
                }
                else{
                    $login_success = true;
                    
                    // ================================================
                    // check user
                    // false: show errors
                    // true: redirect to index page
                    // ================================================
                                        
                    if($login_success){
                        return $this->redirect('inicio');
                    }
                    else{
                        // Errors
                    }
                    
                }
                
               
            }

            return $this->render(
                            'usuarios/formulario.html.twig', array(
                        'tipo_formulario' => $tipo_formulario,
                        'formulario' => $form->createView()
                            )
            );
        }
        else{
            throw $this->createNotFoundException('La página solicitada no existe');
        }
    }

}
