<?php

namespace Croangels\ESV\EcommerceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * Commande
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Commande
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
    * @ORM\OneToMany(targetEntity="LigneCommande", mappedBy="commande")
    **/
    private $ligneCommandes;

    /**
    * @ORM\OneToOne(targetEntity="Croangels\ESV\UtilisateurBundle\Entity\Utilisateur")
    **/
    private $utilisateur;



    public function getTotal()
    {
      $total = 0;
      foreach($this->getLigneCommandes() as $ligneCommande)
      {
        $total += $ligneCommande->getArticle()->getTarif() * $ligneCommande->getQuantite();
      }
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->ligneCommandes = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Add ligneCommandes
     *
     * @param \Croangels\ESV\EcommerceBundle\Entity\LigneCommande $ligneCommandes
     * @return Commande
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

    /**
     * Set utilisateur
     *
     * @param \Croangels\ESV\UtilisateurBundle\Entity\Utilisateur $utilisateur
     * @return Commande
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
}
