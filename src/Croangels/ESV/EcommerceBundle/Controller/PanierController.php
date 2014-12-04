<?php

namespace Croangels\ESV\EcommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Cookie;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Croangels\ESV\EcommerceBundle\Entity\Article;
use Croangels\ESV\EcommerceBundle\Entity\Panier;
use Croangels\ESV\EcommerceBundle\Entity\LigneCommande;

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
    $response = new Response();
    $doctrine = $this->getDoctrine();
    $em       = $doctrine->getEntityManager();
    $user     =  $this->container->get('security.context')->getToken()->getUser();
    if($request->getMethod() == 'POST')
    {
      $panier       = $request->cookies->get('monPanier');
      $repoPanier   = $doctrine->getRepository('CroangelsESVEcommerceBundle:Panier');
      $repoArticle  = $doctrine->getRepository('CroangelsESVEcommerceBundle:Article');
      $repoLigneCommande  = $doctrine->getRepository('CroangelsESVEcommerceBundle:LigneCommande');
      // First Step :
      if(isset($pannier))
      {
        $monPanier = $repoPanier->find($panier);
      }
      else if(isset($user))
      {
        $monPanier = $repoPanier->findOneByUtilisateur($user);
      }


      if($monPanier === null) // Soit le panier n'existe pas soit il n'existe plus (Durée de vie du panier de 30J pour les visiteurs)
      {
        $monPanier = new Panier();
        if($user !== null)
        {
          $monPanier->setUtilisateur($user);
        }
        $em->persist($monPanier);
        $em->flush();

        $response->headers->setCookie(new Cookie('monPanier', $monPanier->getId()));



        $response->setContent('OK');
        return $response->send();
      }


      $data = $request->request->all();
      $article = $repoArticle->find($data['article_id']);

      $ligneCommande = $repoLigneCommande->findOneBy(array('panier' => $monPanier, 'article' => $article));
      if($ligneCommande === null)
      {
        $ligneCommande = new LigneCommande();
        $ligneCommande->setArticle($article);
        $ligneCommande->setQuantite($data['article_quantite']);
        $ligneCommande->setPanier($monPanier);
      }
      else
      {
        $ligneCommande->setQuantite($ligneCommande->getQuantite() + 1);
      }
      $em->persist($ligneCommande);
      $em->persist($monPanier);

      $em->flush();
      $data = "OK";

    }
    else
    {
      $data = 'Le formulaire est vide !';
    }

    return $this->render('::base.json.twig', array('data' => $data));
  }

  public function removeAction()
  {

  }
}
