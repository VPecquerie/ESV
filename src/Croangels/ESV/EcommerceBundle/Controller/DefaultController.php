<?php

namespace Croangels\ESV\EcommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{

    private $nbParPage = 20;

    public function indexAction()
    {

        return $this->render('CroangelsESVEcommerceBundle:Default:index.html.twig');
    }

    public function getCategoriesAction()
    {
      $root = $this->getDoctrine()
      ->getRepository('CroangelsESVEcommerceBundle:Categorie')
      ->findByNom('Racine');
      return $this->render('CroangelsESVEcommerceBundle:TPL:categories.html.twig', array('categories' => $root));
    }
}
