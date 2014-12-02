<?php

namespace Croangels\ESV\UtilisateurBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {





        return $this->render('CroangelsESVUtilisateurBundle:Default:index.html.twig');
    }


}
