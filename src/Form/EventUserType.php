<?php

namespace App\Form;

use App\Entity\Eventuser;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EventUserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom')
            ->add('date', DateType::class, [
                'widget' => 'single_text', // Utilisez 'single_text' pour afficher un champ de texte pour la date
                'html5' => false, // Désactivez l'attribut HTML5 pour permettre la personnalisation
                'format' => 'dd-MM-yyyy', // Définissez le format de la date
                'attr' => ['class' => 'datepicker'], // Ajoutez des classes CSS pour le style
            ])
            
            ->add('lieu',ChoiceType::class, [
                'choices'=>['Nabeul'=>'nabeul','Tunis'=>'tunis','Ariana'=>'ariana'],])
            ->add('description')
            ->add('image', FileType::class, [
                'label' => 'Upload Image',
                'mapped' => false, // As it doesn't persist to the database, not mapped
                'required' => false, ])// Image upload is optional
            ->add('prix')
            
            
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Eventuser::class,
        ]);
    }
}
