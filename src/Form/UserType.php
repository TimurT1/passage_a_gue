<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email')
            ->add('roles', ChoiceType::class, [
                'choices' => [
                    'Utilisateur' => 'ROLE_USER',
                    'Technicien' => 'ROLE_TECHNICIEN',
                    'Gestionnaire' => 'ROLE_GESTIONNAIRE',
                    'Administrateur' => 'ROLE_ADMIN'
                ],
                'expanded' => false,
                'multiple' => true,
                'label' => 'Rôles' 
            ])
            ->add('password')
            ->add('nomUtilisateur')
            ->add('prenomUtilisateur')
            ->add('pseudoUtilisateur')
            ->add('photoUtilisateur')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}