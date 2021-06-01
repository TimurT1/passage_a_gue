<?php

namespace App\Form;

use App\Entity\User;
use App\Entity\CoursEau;
use App\Entity\PassageAGue;
use App\Entity\TypeOuvrage;
use App\Entity\Localisation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PassageAGueType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
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
                    'choice_label' => 'nomUtilisateur'
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
            /*->add('users')
            ->add('submersions')
            ->add('TypeOuvrage')
            ->add('CoursEau')
            ->add('localisation')
            ->add('route')*/
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => PassageAGue::class,
        ]);
    }
}
