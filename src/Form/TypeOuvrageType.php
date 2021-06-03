<?php

namespace App\Form;

use App\Entity\FamilleOuvrage;
use App\Entity\TypeOuvrage;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TypeOuvrageType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomTypeOuvrage')
            ->add('FamilleOuvrage', EntityType::class,[
                'class' => FamilleOuvrage::class,
                'choice_label' => 'nomFamilleOuvrage'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => TypeOuvrage::class,
        ]);
    }
}
