<?php

namespace App\Form;

use App\Entity\Equipement;
use App\Entity\PassageAGue;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EquipementType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            //->add('id')
            ->add('nomEquipement')
            ->add('photoEquipement')
            ->add('detailEquipement')
            ->add('etatVestuste')
            ->add('idTypeEquipement')
            
            ->add('passageAGue', EntityType::class,[
                'class' => PassageAGue::class,
                'choice_label' => 'id'])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Equipement::class,
        ]);
    }
}
