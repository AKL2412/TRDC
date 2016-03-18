<?php

namespace TRC\CoreBundle\Form\Client;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PACType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('prenom')
            ->add('lpd','entity',array(
                'class'    => 'TRCCoreBundle:Client\LDP',
                'property' => 'nom',
                'multiple' => false,
                'required'    => true,
                'empty_value' => 'Choisir le lien de parenté',
                'empty_data'  => null))
            ->add('coordonnee', new CoordonneeType())
            ->add('save','submit',array("label"=>"Enregistrer",
                "attr"=>array("class"=>"btn btn-primary")))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'TRC\CoreBundle\Entity\Client\PAC'
        ));
    }
    /**
     * @return string
     */
    public function getName()
    {
        return 'trc_corebundle_client_pac';
    }
    
}
