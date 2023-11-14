<?php

namespace App\Form;

use App\Entity\Groups;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Regex;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class GroupType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('nom', TextType::class, [
            'constraints' => [
                new Regex([
                    'pattern' => '/^[^0-9].*$/',
                    'message' => 'Group names cannot start with a number.',
                ]),
            ],
        ])
            ->add('logo', FileType::class, [
                'label' => 'Upload Image',
                'mapped' => false, // As it doesn't persist to the database, not mapped
                'required' => true, // Image upload is optional
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Groups::class,
        ]);
    }
}
