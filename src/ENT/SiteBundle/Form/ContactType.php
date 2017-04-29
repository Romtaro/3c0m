<?php

namespace ENT\SiteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\NotBlank;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
      ->add('pseudo', TextType::class, array( 'attr' => array('placeholder' => 'Saisir votre pseudo',),
                                            'required' => false,
                                            'trim' => true,
                                              ))
      ->add('email', EmailType::class, array( 'attr' => array('placeholder' => 'Saisir votre email')))
      ->add('mdp', PasswordType::class, array( 'attr' => array('value' => 'Saisir votre sujet'),
                                          ))
      ->add('submit', SubmitType::class, array( 'attr' => array('label' => 'Connexion')));
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
