<?php

namespace Croangels\ESV\EcommerceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Categorie
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Croangels\ESV\EcommerceBundle\Entity\CategorieRepository")
 */
class Categorie
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
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
    * @ORM\ManyToOne(targetEntity="Categorie", inversedBy="fils")
    * @ORM\JoinColumn(name="parent_id", referencedColumnName="id")
    **/
    private $parent;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="icone", type="text", nullable=true)
     */
    private $icone;

    // ...
    /**
    * @ORM\OneToMany(targetEntity="Article", mappedBy="categorie")
    **/
    private $articles;

    /**
    * @ORM\OneToMany(targetEntity="Categorie", mappedBy="parent")
    **/
    private $fils;
    // ...

    public function __construct()
    {
      $articles = new ArrayCollection();
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
     * Set nom
     *
     * @param string $nom
     * @return Categorie
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set parent
     *
     * @param integer $parent
     * @return Categorie
     */
    public function setParent($parent)
    {
        $this->parent = $parent;

        return $this;
    }

    /**
     * Get parent
     *
     * @return integer
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Categorie
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set icone
     *
     * @param string $icone
     * @return Categorie
     */
    public function setIcone($icone)
    {
        $this->icone = $icone;

        return $this;
    }

    /**
     * Get icone
     *
     * @return string
     */
    public function getIcone()
    {
        return $this->icone;
    }

    /**
     * Add articles
     *
     * @param \Croangels\ESV\EcommerceBundle\Entity\Article $articles
     * @return Categorie
     */
    public function addArticle(\Croangels\ESV\EcommerceBundle\Entity\Article $articles)
    {
        $this->articles[] = $articles;

        return $this;
    }

    /**
     * Remove articles
     *
     * @param \Croangels\ESV\EcommerceBundle\Entity\Article $articles
     */
    public function removeArticle(\Croangels\ESV\EcommerceBundle\Entity\Article $articles)
    {
        $this->articles->removeElement($articles);
    }

    /**
     * Get articles
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getArticles()
    {
        return $this->articles;
    }

    /**
     * Add fils
     *
     * @param \Croangels\ESV\EcommerceBundle\Entity\Categorie $fils
     * @return Categorie
     */
    public function addFils(\Croangels\ESV\EcommerceBundle\Entity\Categorie $fils)
    {
        $this->fils[] = $fils;

        return $this;
    }

    /**
     * Remove fils
     *
     * @param \Croangels\ESV\EcommerceBundle\Entity\Categorie $fils
     */
    public function removeFils(\Croangels\ESV\EcommerceBundle\Entity\Categorie $fils)
    {
        $this->fils->removeElement($fils);
    }

    /**
     * Get fils
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFils()
    {
        return $this->fils;
    }

    public function __toString()
    {
        return $this->nom;
    }

    /**
     * Add fils
     *
     * @param \Croangels\ESV\EcommerceBundle\Entity\Categorie $fils
     * @return Categorie
     */
    public function addFil(\Croangels\ESV\EcommerceBundle\Entity\Categorie $fils)
    {
        $this->fils[] = $fils;

        return $this;
    }

    /**
     * Remove fils
     *
     * @param \Croangels\ESV\EcommerceBundle\Entity\Categorie $fils
     */
    public function removeFil(\Croangels\ESV\EcommerceBundle\Entity\Categorie $fils)
    {
        $this->fils->removeElement($fils);
    }
}
