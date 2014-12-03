<?php

namespace Croangels\ESV\EcommerceBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class ArticleVignetteAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('id')
            ->add('url')
            ->add('alt')
            ->add('title')
            ->add('isMaster')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('id')
            ->add('url')
            ->add('alt')
            ->add('title')
            ->add('isMaster')
            ->add('_action', 'actions', array(
                'actions' => array(
                    'show' => array(),
                    'delete' => array(),
                )
            ))
        ;
    }

    /**
     * @param FormMapper $formMapper
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('file', 'file', array('required' => true, 'label' => "Sélectionner la vignette"))
            ->add('alt', null, array('required' => false, "label" => "Saisir le texte alternatif"))
            ->add('title', null, array('required' => false, "label" => "Saisir le contenu de l'infobulle"))
            ->add('isMaster', null, array('required' => false, 'label' => "Image principale"))
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id')
            ->add('url')
            ->add('alt')
            ->add('title')
            ->add('isMaster')
        ;
    }

    public function prePersist($vignette)
    {
      $this->manageFileUpload($vignette);
    }

    public function preUpdate($vignette)
    {
      $this->manageFileUpload($vignette);
    }

    private function manageFileUpload($vignette)
    {
      if ($vignette->getFile())
      {
        $vignette->refreshUpdated();
        $vignette->upload();
      }
    }
}
