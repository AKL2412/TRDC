<?php

namespace TRC\CoreBundle\Form\Client;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class IdentiteType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom','text')
            ->add('prenom','text')
            ->add('numeroPiece','text')
            ->add('piece','entity',array(
                'class'    => 'TRCCoreBundle:Client\Piece',
                'property' => 'nom',
                'multiple' => false,
                'required'    => true,
                'empty_value' => 'Choisir le type de pièce',
                'empty_data'  => null))
            ->add('civilite','entity',array(
                'class'    => 'TRCCoreBundle:Client\Civilite',
                'property' => 'nom',
                'multiple' => false,
                'required'    => true,
                'empty_value' => 'Civilité du client',
                'empty_data'  => null))
            ->add('pays','entity',array(
                'class'    => 'TRCCoreBundle:Client\Pays',
                'property' => 'nom',
                'multiple' => false,
                'required'    => true,
                'empty_value' => 'Choisir le pays',
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
            'data_class' => 'TRC\CoreBundle\Entity\Client\Identite'
        ));
    }
    /**
     * @return string
     */
    public function getName()
    {
        return 'trc_corebundle_client_identite';
    }
    
}
