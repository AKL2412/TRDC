<?php

namespace TRC\CoreBundle\Form\DDC;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CDCDType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('montant','text')
            ->add('duree','text')
            ->add('quotite','text')
            ->add('save','submit',array("label"=>"Ajouter",
                'attr'=>array("class"=>"btn btn-primary")))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'TRC\CoreBundle\Entity\DDC\CDCD'
        ));
    }
    /**
     * @return string
     */
    public function getName()
    {
        return 'trc_corebundle_ddc_cdcd';
    }
    
}
