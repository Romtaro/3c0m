<?php

namespace ENT\SiteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\FormBuilderInterface;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
      ->add('name', TextType::class)
      ->add('email', EmailType::class)
      ->add('subject', TextType::class)
      ->add('body', TextareaType::class);
    }

    public function getName()
    {
        return 'contact';
    }

    public function configureOptions(OptionResolver $resolver)
    {
        $resolver->setDefaults(array( 'data_class' => 'ENT\SiteBundle\Entity\Contact'));
    }
}
