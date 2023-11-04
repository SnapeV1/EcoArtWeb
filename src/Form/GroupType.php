<?php

namespace App\Form;

use App\Entity\Groups;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class GroupType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom')
            ->add('logo', FileType::class, [
                'label' => 'Upload Image',
                'mapped' => false, // As it doesn't persist to the database, not mapped
                'required' => false, // Image upload is optional
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Groups::class,
        ]);
    }
}
