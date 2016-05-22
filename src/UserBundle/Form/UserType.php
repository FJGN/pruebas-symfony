<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

class UserType extends AbstractType {
    
    public function buildForm(FormBuilderInterface $builder, array $options) {
        
        $builder
                 ->add('username', TextType::class, array('label' => 'Usuario'))
                ->add('plainPassword', PasswordType::class, array('label' => 'Contraseña'))
                ->add('roles', ChoiceType::class, array('label' => 'Selecciona un rol',
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
    
    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults(array(
           'data_class' => 'UserBundle\Entity\Usuario' 
        ));
    }
}
