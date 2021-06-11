<?php

namespace App\Form;

use App\Entity\Procedure;
use App\Entity\PassageAGue;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProcedureType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomProcedure')
            ->add('detailProcedure')
            ->add('dateAjoutProcedure')
            
            ->add('PassageAGue', EntityType::class,[
                'class' => PassageAGue::class,
                'choice_label' => 'id'])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Procedure::class,
        ]);
    }
}
