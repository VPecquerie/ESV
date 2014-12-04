<?php

namespace Croangels\ESV\EcommerceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * LigneCommande
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class LigneCommande
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
    * @ORM\ManyToOne(targetEntity="Article")
    **/
    private $article;

    /**
    * @ORM\Column(name="quantite", type="integer")
    **/
    private $quantite;

    /**
    * @ORM\ManyToOne(targetEntity="Commande")
    * @ORM\JoinColumn(name="command_id", referencedColumnName="id")
    **/
    private $commande;

    /**
    * @ORM\ManyToOne(targetEntity="Panier")
    * @ORM\JoinColumn(name="panier_id", referencedColumnName="id")
    **/
    private $panier;


    public function getTotal()
    {
      return $this->article->getTarif() * $this->quantite;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set article
     *
     * @param \Croangels\ESV\EcommerceBundle\Entity\Article $article
     * @return LigneCommande
     */
    public function setArticle(\Croangels\ESV\EcommerceBundle\Entity\Article $article = null)
    {
        $this->article = $article;

        return $this;
    }

    /**
     * Get article
     *
     * @return \Croangels\ESV\EcommerceBundle\Entity\Article
     */
    public function getArticle()
    {
        return $this->article;
    }


    /**
     * Set commande
     *
     * @param \Croangels\ESV\EcommerceBundle\Entity\Commande $commande
     * @return LigneCommande
     */
    public function setCommande(\Croangels\ESV\EcommerceBundle\Entity\Commande $commande = null)
    {
        $this->commande = $commande;

        return $this;
    }

    /**
     * Get commande
     *
     * @return \Croangels\ESV\EcommerceBundle\Entity\Commande
     */
    public function getCommande()
    {
        return $this->commande;
    }

    /**
     * Set panier
     *
     * @param \Croangels\ESV\EcommerceBundle\Entity\Panier $panier
     * @return LigneCommande
     */
    public function setPanier(\Croangels\ESV\EcommerceBundle\Entity\Panier $panier = null)
    {
        $this->panier = $panier;

        return $this;
    }

    /**
     * Get panier
     *
     * @return \Croangels\ESV\EcommerceBundle\Entity\Panier
     */
    public function getPanier()
    {
        return $this->panier;
    }

    /**
     * Set quantite
     *
     * @param integer $quantite
     * @return LigneCommande
     */
    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;

        return $this;
    }

    /**
     * Get quantite
     *
     * @return integer
     */
    public function getQuantite()
    {
        return $this->quantite;
    }
}
