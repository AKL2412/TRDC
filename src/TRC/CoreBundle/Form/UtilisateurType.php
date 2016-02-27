<?php

namespace TRC\CoreBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UtilisateurType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom','text')
            ->add('cin','text')
            ->add('matricule','text')
            ->add('prenom','text')
            ->add('email','email')
            ->add('image','file')
            ->add('adresse','textarea')
            ->add('save', 'submit', array('label' => 'Sauvegarder',
            'attr'=>array('class'=>'btn btn-primary')))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'TRC\CoreBundle\Entity\Utilisateur'
        ));
    }
    /**
     * @return string
     */
    public function getName()
    {
        return 'trc_corebundle_utilisateur';
    }
    
}
