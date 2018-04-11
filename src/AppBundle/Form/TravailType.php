<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TravailType extends AbstractType
{
    
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('titre')
        ->add('description')
        ->add('prix')
        ->add('dateDebut')
        ->add('modePaiment')
        ->add('dateDevis')
        ; 
        
    }

    public function setDefaultOptions(OptionsRevolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'fiche_chantier_edit' =>false,  
        ));
        
    }
    

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Travail'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_travail';
    }


}
