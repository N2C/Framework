<?php

namespace N2C\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('gender', ChoiceType::class, array(
                'choices'=> array(
                    'undefined'=>"undefined",
                    "male"=>"male",
                    "female"=>"female"
                )
            ))
            ->add('firstname', 'text')
            ->add('lastname', 'text')
            ->add('dateofbirth', 'datetime')

        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'N2C\UserBundle\Entity\User'
        ));
    }
    
    public function getName(){
        return "n2c_userbundle_user";
    }
}
