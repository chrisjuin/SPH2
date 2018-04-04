<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TRA_travailType extends AbstractType
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
        
        // if ($options['fiche_chantier_edit']){
        //     $builder
        //         ->add('titre')
        //         ->add('description')
        //         ->add('prix')
        //         ->add('dateDebut')
        //         ->add('modePaiment')    
        //         ->add('facture')
        //         ->add('devis')
        //         ;
        // }
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
            'data_class' => 'AppBundle\Entity\TRA_travail'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_tra_travail';
    }


}
