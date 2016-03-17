<?php

namespace TRC\CoreBundle\Form\Client;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EmployeurType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('denomination')
            ->add('adresseSociale')
            ->add('telephone')
            ->add('fax')
            ->add('ville')
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'TRC\CoreBundle\Entity\Client\Employeur'
        ));
    }
    /**
     * @return string
     */
    public function getName()
    {
        return 'trc_corebundle_client_employeur';
    }
    
}
