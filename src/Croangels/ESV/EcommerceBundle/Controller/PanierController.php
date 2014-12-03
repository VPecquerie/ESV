<?php

namespace Croangels\ESV\EcommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Cookie;
use Symfony\Component\HttpFoundation\Request;
class PanierController extends Controller
{

  private $nbParPage = 20;

  public function voirAction()
  {

    return $this->render('CroangelsESVEcommerceBundle:Panier:voir.html.twig');
  }

  public function getAction()
  {

    $root = $this->getDoctrine()
                 ->getRepository('CroangelsESVEcommerceBundle:Categorie')
                 ->findById('Racine');
    return $this->render('CroangelsESVEcommerceBundle:TPL:categories.html.twig', array('categories' => $root));
  }

  public function addAction()
  {
    $request  = $this->get('request');
    $doctrine = $this->getDoctrine();
    $em       = $dotrine->getEntityManager();
    $user     =  $this->container->get('security.context')->getToken()->getUser();
    if($request->getMethod() == 'POST')
    {
      $panier       = $request->cookies->get('monPanier');
      $repoPanier   = $this->getDoctrine()->getRepository('CroangelsESVEcommerceBundle:Panier');
      $repoArticle  = $this->getDoctrine()->getRepository('CroangelsESVEcommerceBundle:Article');

      // First Step :
      if(isset($pannier))
      {
        $monPanier = $repoPanier->findById($panier);
      }
      else if(isset($user))
      {
        $monPanier = $repoPanier->findByUser($user);
      }


      if($monPanier === null) // Soit le panier n'existe pas soit il n'existe plus (Durée de vie du panier de 30J pour les visiteurs)
      {
        $monPanier = new Panier();
        $em->persist($panier);
        $em->flush();

        $response->headers->setCookie(new Cookie('monPanier', $panier->getId()));
      }



      $data['post'] = $request->request->all();

    }
    else
    {
      $data['erreur'] = 'Le formulaire est vide !';
    }

    return $this->render('::base.json.twig', array('data' => $data));
  }

  public function removeAction()
  {

  }
}
