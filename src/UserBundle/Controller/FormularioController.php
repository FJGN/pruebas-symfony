<?php

namespace UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use UserBundle\Entity\Usuario;
use UserBundle\Form\UserType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class FormularioController extends Controller {

    public function loginAction(Request $request) {

        // Metodos y acciones para login
        $authenticationUtils = $this->get('security.authentication_utils');

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();

        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();
        
        
        $form = $this->createForm(UserType::class, new Usuario());
        
        return $this->render(
                    'usuarios/formulario.html.twig', array(
                    'tipo_formulario' => 'Login',
                    'formulario' => $form->createView(),
                    'nombre_usuario' => $lastUsername,
                    'ruta_login' => $this->generateUrl('inicio'),
                    'errores' => $error
        ));
    }

    public function registroAction(Request $request) {


        $usuario = new Usuario();
        $form = $this->createForm(UserType::class, $usuario);

        $error = null;
        $last_username = ($form->get('username')->getData() == null) ? '' : $form->get('username')->getData();

        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            if ($form->isValid()) {

                $data = array(
                    'usuario' => $form->get('username')->getData(),
                    'contra' => $form->get('plainPassword')->getData(),
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
            $error= array(
                "messageKey" => "Usuario repetido",
                "messageData" => array(
                    "Usuario repetido" => "Ese usuario ya existe"
                )
            );
        }
        
        return $this->render(
                        'usuarios/formulario.html.twig', array(
                    'tipo_formulario' => 'Registrar',
                    'formulario' => $form->createView(),
                    'nombre_usuario' => $last_username,
                    'ruta_login' => '',
                    'errores' => $error
        ));
    }

}
