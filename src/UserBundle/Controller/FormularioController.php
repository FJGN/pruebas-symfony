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

    public function loginAction(Request $request) {
        
        // Metodos y acciones para login
        
        
    }

    public function registroAction(Request $request) {


        $usuario = new Usuario();
        $form = $this->createFormBuilder($usuario)
                ->add('username', TextType::class, array('label' => 'Usuario'))
                ->add('password', PasswordType::class, array('label' => 'Contraseña'))
                ->add('roles', ChoiceType::class, array('label' => 'Selecciona un rol',
                        'choices' => array(
                            'Usuario' => 'user',
                            'Administrador' => 'admin',
                            'Root' => 'root'
                        ),
                        'expanded' => true,
                        'multiple' => false,
                        'data' => 'user'
                ))->getForm();
        
        
        

        $form->handleRequest($request);

        if ($form->isValid() && $form->isSubmitted()) {
            $data = array(
                    'usuario' => $form->get('username')->getData(),
                    'contra' => $form->get('password')->getData(),
                    'rol' => $form->get('roles')->getData()
            );
            
            
            $signup_success = true;


            // ================================================
            // check user if exists
            // false: show errors
            // true: save data and redirect to success page
            // ================================================

            if ($signup_success) {
                // Save data and change session to this user

                $password = $this->get('security.password_encoder')
                        ->encodePassword($usuario, $usuario->getPlainPassword());
                $usuario->setPassword($password);
                
                $em = $this->getDoctrine()->getManager();
                $em->persist($usuario);
                $em->flush();
                        
                
                return $this->render('usuarios/exito.html.twig', $data);
            } else {
                // Errors
            }
            
            
        }
        
        
        
        return $this->render(
                'usuarios/formulario.html.twig', array(
                'tipo_formulario' => 'Registrar',
                'formulario' => $form->createView()
        ));
        
    }

    
    
    
    
    
    
    ///////////////////////////////////////////////////////////
    // FUNCION ANTERIOR!!!!!!!!!
    ///////////////////////////////////////////////////////////
    public function formAction($tipo, Request $request) {

        if ($tipo == 'login' || $tipo == 'registro') {



            // if user already login/register, show other page                                    

            $tipo_formulario = ($tipo == 'login') ? 'Login' : 'Registrar';

            $form = $this->createFormBuilder(new Usuario())
                    ->add('user', TextType::class, array('label' => 'Usuario'))
                    ->add('password', PasswordType::class, array('label' => 'Contraseña'));


            if ($tipo_formulario == 'Registrar') {
                
            }

            $form = $form->add('enviar', SubmitType::class, array('label' => $tipo_formulario))
                    ->getForm();


            $form->handleRequest($request);

            if ($form->isValid()) {
                $data = array(
                    'usuario' => $form->get('user')->getData(),
                    'contra' => $form->get('password')->getData()
                );

                if ($tipo_formulario == 'Registrar') {
                    array_push($data, array('rol' => $form->get('rol')->getData()));

                    $signup_success = true;


                    // ================================================
                    // check user if exists
                    // false: show errors
                    // true: save data and redirect to success page
                    // ================================================

                    if ($signup_success) {
                        // Save data and change session to this user

                        return $this->render('usuarios/exito.html.twig', $data);
                    } else {
                        // Errors
                    }
                } else {
                    $login_success = true;

                    // ================================================
                    // check user
                    // false: show errors
                    // true: redirect to index page
                    // ================================================

                    if ($login_success) {
                        return $this->redirect('inicio');
                    } else {
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
        } else {
            throw $this->createNotFoundException('La página solicitada no existe');
        }
    }

}
