<?php

namespace App\Form;

use App\Entity\User;
use App\Entity\CoursEau;
use App\Entity\Equipement;
use App\Entity\PassageAGue;
use App\Entity\TypeOuvrage;
use App\Entity\Localisation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;

class PassageAGueType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $editedObject = $builder->getData();
        $builder
            //->add('id')
            ->add('gpsX')
            ->add('gpsY')
            ->add('frequenceSubmersion')
            ->add('largeurPassage')
            ->add('longueurPassage')
            ->add('traficJournalier')
            ->add('boolLimitationRespectee')
            ->add('boolArchive')
            ->add('tauxAccidentalite')
            ->add('idUtilisateur', EntityType::class,[
                    'class' => User::class,
                    'choice_label' => 'fullname'
            ])
            ->add('TypeOuvrage', EntityType::class, [
                'class' => TypeOuvrage::class,
                'choice_label' => 'nomTypeOuvrage'
            ])
            ->add('CoursEau', EntityType::class, [
                'class' => CoursEau::class,
                'choice_label' => 'nomCoursEau'
            ]) 
            ->add('localisation', EntityType::class, [
                'class' => Localisation::class,
                'choice_label' => 'nomLocalisation'
            ])
            ->add('users', EntityType::class, [ 
                'class'        => 'App\Entity\User',
                'choice_label' => 'fullname',
                'label'     => 'Utilisateurs?',
                'expanded'  => true,
                'multiple'  => true,
                'by_reference' => false
            ])
            ->add('submersions', EntityType::class, [ 
                'class'        => 'App\Entity\Submersion',
                'choice_label' => 'fullname',
                'label'     => 'Submersions?',
                'expanded'  => true,
                'multiple'  => true,
                'by_reference' => false
            ])
            ->add('route', EntityType::class, [ 
                'class'        => 'App\Entity\Route',
                'choice_label' => 'numeroRoute',
                'label'     => 'Routes',
                'expanded'  => true,
                'multiple'  => true,
                'by_reference' => false
            ])
            /*->add('equipements', EntityType::class, [ 
                'class'        => 'App\Entity\Equipement',
                'choice_label' => 'nomEquipement',
                'label'     => 'Equipement',
                'expanded'  => true,
                'multiple'  => true,
                'by_reference' => true
            ])*/

        ;
        $builder->add('equipements', CollectionType::class, [
                    'entry_type' => EquipementType::class,
                    'entry_options' => ['label' => false],                    
                    'allow_add' => true,
                    'allow_delete' => true,
                    'by_reference' => false                    
        ])
        
        ;  
        $builder->add('procedures', CollectionType::class, [
            'entry_type' => ProcedureType::class,
            'entry_options' => ['label' => false],                    
            'allow_add' => true,
            'allow_delete' => true,
            'by_reference' => false                    
        ])

        ;    
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => PassageAGue::class,
        ]);
    }
}