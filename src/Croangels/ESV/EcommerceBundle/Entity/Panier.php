<?php

namespace Croangels\ESV\EcommerceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Panier
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Croangels\ESV\EcommerceBundle\Entity\PanierRepository")
 */
class Panier
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
    * @ORM\OneToOne(targetEntity="Croangels\ESV\UtilisateurBundle\Entity\Utilisateur")
    **/
    private $utilisateur;

    /**
    * @ORM\OneToMany(targetEntity="LigneCommande", mappedBy="panier", cascade={"remove", "persist"})
    **/
    private $ligneCommandes;

    public function getMontant()
    {
      $retour = 0;
      foreach($this->ligneCommandes as $row)
      {
        $retour += $row->getArticle()->getTarif() * $row->getQuantite();
      }

      return $retour;
    }

    public function getNbArticles()
    {
      $retour = 0;
      foreach($this->ligneCommandes as $row)
      {
        $retour += $row->getQuantite();
      }

      return $retour;
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
     * Constructor
     */
    public function __construct()
    {
        $this->ligneCommandes = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set utilisateur
     *
     * @param \Croangels\ESV\UtilisateurBundle\Entity\Utilisateur $utilisateur
     * @return Panier
     */
    public function setUtilisateur(\Croangels\ESV\UtilisateurBundle\Entity\Utilisateur $utilisateur = null)
    {
        $this->utilisateur = $utilisateur;

        return $this;
    }

    /**
     * Get utilisateur
     *
     * @return \Croangels\ESV\UtilisateurBundle\Entity\Utilisateur
     */
    public function getUtilisateur()
    {
        return $this->utilisateur;
    }

    /**
     * Add ligneCommandes
     *
     * @param \Croangels\ESV\EcommerceBundle\Entity\LigneCommande $ligneCommandes
     * @return Panier
     */
    public function addLigneCommande(\Croangels\ESV\EcommerceBundle\Entity\LigneCommande $ligneCommandes)
    {
        $this->ligneCommandes[] = $ligneCommandes;

        return $this;
    }

    /**
     * Remove ligneCommandes
     *
     * @param \Croangels\ESV\EcommerceBundle\Entity\LigneCommande $ligneCommandes
     */
    public function removeLigneCommande(\Croangels\ESV\EcommerceBundle\Entity\LigneCommande $ligneCommandes)
    {
        $this->ligneCommandes->removeElement($ligneCommandes);
    }

    /**
     * Get ligneCommandes
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getLigneCommandes()
    {
        return $this->ligneCommandes;
    }

    public function toString()
    {
      $retour = "Panier : ".$this->getId()."\n";
      foreach($this->getLigneCommandes() as $row)
      {
        $retour .= "Article : ".$row->getArticle()->toString()."- Quantité : ".$row->getQuantite()."\n";
      }
      return $retour;
    }

}
