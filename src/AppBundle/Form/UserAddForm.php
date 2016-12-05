<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use AppBundle\Entity\UsersFacts;
use AppBundle\Repository\UsersFactsRepository;
use AppBundle\Repository\UsersTypeRepository;
use AppBundle\Entity\UsersType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;





class UserAddForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('name')
        ->add('sname')
        ->add('info')
        ->add('email')
        ->add('info')
        ->add('UsersFacts', EntityType::class, [
                'placeholder' => 'Choose a Fact',
                'class' => UsersFacts::class,
                'query_builder' => function(UsersFactsRepository $repo) {
                    return $repo->createAlphabeticalQueryBuilder();
                }
            ])
        ->add('UsersType', EntityType::class, [
            'placeholder' => 'Choose a Type',
            'class' => UsersType::class,
            'query_builder' => function(UsersTypeRepository $repo) {
            return $repo->createAlphabeticalQueryBuilder_type();
            }
        ])
        ->add('hasFact', ChoiceType::class, [
                'choices' => [
                    'Yes' => true,
                    'No' => false,
                ]
            ])
       ->add('image', FileType::class, [
           'label' => 'Choose Avatar',
           ])
       
       ->add('date', DateType::class, [
                'widget' => 'single_text' 
            ]);
        
    }
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => 'AppBundle\Entity\Users'
        ]);
    }
}



