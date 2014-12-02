<?php

namespace Croangels\ESV\UtilisateurBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UtilisateurType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', 'text', array('required' => true, 'max_length' => 50, 'label' => 'Votre nom :'))
            ->add('prenom', 'text', array('required' => true, 'max_length' => 50, 'label' => 'Votre prénom :'))
            ->add('sexe', 'choice', array
                                    (
                                      'choices'   => array('0' => 'Un Homme', '1' => 'Une Femme'),
                                      'required'  => false, 'label' => 'Vous êtes :'
                                    )
                 )
            ->add('dateNaissance', 'birthday', array('required' => false, 'label' => 'Votre date de naissance :'))
            ->add('adrRue', 'text', array('required' => false, 'label' => 'Votre rue :'))
            ->add('adrVille','text', array('required' => false, 'label' => 'Votre ville : '))
            ->add('adrPays','country', array('required' => false, 'label' => 'Votre pays :'))
            ->add('adrCodePostal', 'text', array('required' => false, 'max_length' => 10, 'label' => 'Votre code postal'));
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Croangels\ESV\UtilisateurBundle\Entity\Utilisateur'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'croangels_esv_utilisateurbundle_utilisateur';
    }

    public function getParent()
    {
      return 'fos_user_registration';
    }

}
