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
    * @ORM\OneToOne(targetEntity="Article")
    **/
    private $article;

    /**
    * @ORM\OneToOne(targetEntity="Croangels\ESV\UtilisateurBundle\Entity\Utilisateur")
    **/
    private $quantite;

    /**
    * @ORM\ManyToOne(targetEntity="Commande")
    * @ORM\JoinColumn(name="command_id", referencedColumnName="id")
    **/
    private $commande;


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
     * Set quantite
     *
     * @param \Croangels\ESV\UtilisateurBundle\Entity\Utilisateur $quantite
     * @return LigneCommande
     */
    public function setQuantite(\Croangels\ESV\UtilisateurBundle\Entity\Utilisateur $quantite = null)
    {
        $this->quantite = $quantite;

        return $this;
    }

    /**
     * Get quantite
     *
     * @return \Croangels\ESV\UtilisateurBundle\Entity\Utilisateur 
     */
    public function getQuantite()
    {
        return $this->quantite;
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
}
