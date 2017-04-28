<?php

namespace ENT\SiteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\NotBlank;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
      ->add('name', TextType::class, array( 'attr' => array('placeholder' => 'Saisir votre nom',),
                                            'required' => false,
                                            'trim' => true,
                                              ))
      ->add('email', EmailType::class, array( 'attr' => array('placeholder' => 'Saisir votre email')))
      ->add('subject', TextType::class, array( 'attr' => array('placeholder' => 'Saisir votre sujet')))
      ->add('body', TextareaType::class, array( 'attr' => array('placeholder' => 'Saisir votre message')));
    }

    public function getName()
    {
        return 'contact';
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array( 'data_class' => 'ENT\SiteBundle\Entity\Contact'));
    }
}
