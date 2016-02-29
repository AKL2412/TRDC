<?php

namespace TRC\CoreBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SystemeType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom','text')
            ->add('code','text')
            ->add('description','textarea')
            ->add('save','submit', array('label' => 'Enregistrer',
            'attr'=>array('class'=>'btn btn-info')))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'TRC\CoreBundle\Entity\Systeme'
        ));
    }
    /**
     * @return string
     */
    public function getName()
    {
        return 'trc_corebundle_systeme';
    }
    
}
