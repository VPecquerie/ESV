<?php
// src/Acme/DemoBundle/Admin/PostAdmin.php

namespace Croangels\ESV\EcommerceBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class ArticleAdmin extends Admin
{
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('libelle', 'text', array('label' => 'Libelle'))
            ->add('descriptionCourte', 'text', array('label' => 'Description courte'))
            ->add('descriptionLongue', 'text', array('label' => 'Description longue'))
            ->add('tarif', null, array('label' => 'Tarif'))
            ->add('ean', 'integer', array('label' => 'EAN'))
            ->add('categorie', 'entity', array('class' => 'Croangels\ESV\EcommerceBundle\Entity\Categorie'))
            ->add('vignettes', 'sonata_type_collection', array( 'by_reference' => false ), array
                                                                                          (
                                                                                            'edit' => 'inline',
                                                                                            'delete' => false,
                                                                                            'inline' => 'table',
                                                                                            'sortable' => 'id',
                                                                                          ))

        ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('libelle')
            ->add('categorie')
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('libelle')
            ->addIdentifier('tarif')
            ->add('categorie')
        ;
    }
}
