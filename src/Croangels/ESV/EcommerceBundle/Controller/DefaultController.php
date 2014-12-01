<?php

namespace Croangels\ESV\EcommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('CroangelsESVEcommerceBundle:Default:index.html.twig', array('name' => $name));
    }
}
