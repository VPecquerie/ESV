<?php
namespace Croangels\ESV\EcommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Collections\ArrayCollection;

class WebservicesController extends Controller
{

    public function getProductsAction(Request $request)
    {
      $em = $this->getDoctrine()->getManager();
      $query = $em->createQueryBuilder()
                  ->select('a, c, v')
                  ->from('CroangelsESVEcommerceBundle:Article','a')
                  ->leftJoin('a.categorie', 'c')
                  ->leftJoin('a.vignettes', 'v')
                  ->getQuery();

      $data = $query->getArrayResult();

      $format = $request->getRequestFormat();
      return $this->render('::base.'.$format.'.twig', array('data' => $data));
    }

    public function getCategoriesAction(Request $request)
    {
      $em = $this->getDoctrine()->getManager();
      $query = $em->createQueryBuilder()
      ->select('c')
      ->from('CroangelsESVEcommerceBundle:Categorie','c')
      ->getQuery();

      $data = $query->getArrayResult();

      $format = $request->getRequestFormat();
      return $this->render('::base.'.$format.'.twig', array('data' => $data));
    }
}
