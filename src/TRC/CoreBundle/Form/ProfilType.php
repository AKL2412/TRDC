<?php

namespace TRC\CoreBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProfilType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom','text')
            ->add('description','textarea',array(
            'attr'=>array('class'=>'ckeditor')))
            ->add('code','text')
            ->add('entite','choice',array(
                'choices'=>array("Agence"=>"Agence",
                        "BOC"=>"Back Office Crédit",
                        "CIC"=>"Comité de Crédits",
                        "Zone"=>"Zone")
                ))
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
            'data_class' => 'TRC\CoreBundle\Entity\Profil'
        ));
    }
    /**
     * @return string
     */
    public function getName()
    {
        return 'trc_corebundle_profil';
    }
    
}
