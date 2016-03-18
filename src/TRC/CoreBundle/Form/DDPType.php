<?php

namespace TRC\CoreBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DDPType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('min','text')
            ->add('max','text')
            ->add('description','textarea')
            ->add('tdc','entity',array(
                'class'    => 'TRCCoreBundle:DDC\TDC',
                'property' => 'nom',
                'multiple' => true,
                'required'    => true,
                'empty_value' => 'Choisissez le type de crédit',
                'empty_data'  => null))
            ->add('save','submit', array('label' => 'Enregistrer',
            'attr'=>array('class'=>'btn btn-primary')))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'TRC\CoreBundle\Entity\DDP'
        ));
    }
    /**
     * @return string
     */
    public function getName()
    {
        return 'trc_corebundle_ddp';
    }
    
}
