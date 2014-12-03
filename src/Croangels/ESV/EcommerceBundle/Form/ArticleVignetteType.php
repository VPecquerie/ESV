<?php

namespace Croangels\ESV\EcommerceBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ArticleVignetteType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('url')
            ->add('alt')
            ->add('title')
            ->add('isMaster')
            ->add('article')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Croangels\ESV\EcommerceBundle\Entity\ArticleVignette'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'croangels_esv_ecommercebundle_articlevignette';
    }
}
