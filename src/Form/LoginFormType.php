<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

class LoginFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email', EmailType::class, array('required' => false))
            ->add('password', PasswordType::class)
            ->add('checkPassword', PasswordType::class)
            ->add('nomUtilisateur', null ,array('required' => false))
            ->add('prenomUtilisateur', null ,array('required' => false))
            ->add('pseudoUtilisateur', null ,array('required' => false))
            ->add('photoUtilisateur', null ,array('required' => false))

        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
