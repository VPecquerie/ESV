<?php

namespace Croangels\ESV\EcommerceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Article
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Croangels\ESV\EcommerceBundle\Entity\ArticleRepository")
 */
class Article
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
     * @ORM\Column(name="libelle", type="string", length=255)
     */
    private $libelle;

    /**
     * @var string
     *
     * @ORM\Column(name="descriptionCourte", type="string", length=255, nullable=true)
     */
    private $descriptionCourte;

    /**
     * @var string
     *
     * @ORM\Column(name="descriptionLongue", type="text", nullable=true)
     */
    private $descriptionLongue;

    /**
     * @var float
     *
     * @ORM\Column(name="Tarif", type="float")
     */
    private $tarif = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="ean", type="integer", nullable=true)
     */
    private $ean;

    /**
    * @ORM\ManyToOne(targetEntity="Categorie", inversedBy="articles")
    * @ORM\JoinColumn(name="category_id", referencedColumnName="id")
    **/
    private $categorie;

    /**
    * @ORM\OneToMany(targetEntity="ArticleVignette", mappedBy="article")
    **/
    private $vignettes;

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
     * Set libelle
     *
     * @param string $libelle
     * @return Article
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get libelle
     *
     * @return string
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set descriptionCourte
     *
     * @param string $descriptionCourte
     * @return Article
     */
    public function setDescriptionCourte($descriptionCourte)
    {
        $this->descriptionCourte = $descriptionCourte;

        return $this;
    }

    /**
     * Get descriptionCourte
     *
     * @return string
     */
    public function getDescriptionCourte()
    {
        return $this->descriptionCourte;
    }

    /**
     * Set descriptionLongue
     *
     * @param string $descriptionLongue
     * @return Article
     */
    public function setDescriptionLongue($descriptionLongue)
    {
        $this->descriptionLongue = $descriptionLongue;

        return $this;
    }

    /**
     * Get descriptionLongue
     *
     * @return string
     */
    public function getDescriptionLongue()
    {
        return $this->descriptionLongue;
    }

    /**
     * Set tarif
     *
     * @param float $tarif
     * @return Article
     */
    public function setTarif($tarif)
    {
        $this->tarif = $tarif;

        return $this;
    }

    /**
     * Get tarif
     *
     * @return float
     */
    public function getTarif()
    {
        return $this->tarif;
    }

    /**
     * Set ean
     *
     * @param integer $ean
     * @return Article
     */
    public function setEan($ean)
    {
        $this->ean = $ean;

        return $this;
    }

    /**
     * Get ean
     *
     * @return integer
     */
    public function getEan()
    {
        return $this->ean;
    }


    /**
     * Set categorie
     *
     * @param \Croangels\ESV\EcommerceBundle\Entity\Categorie $categorie
     * @return Article
     */
    public function setCategorie(\Croangels\ESV\EcommerceBundle\Entity\Categorie $categorie = null)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get categorie
     *
     * @return \Croangels\ESV\EcommerceBundle\Entity\Categorie
     */
    public function getCategorie()
    {
        return $this->categorie;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->vignettes = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add vignettes
     *
     * @param \Croangels\ESV\EcommerceBundle\Entity\ArticleVignette $vignettes
     * @return Article
     */
    public function addVignette(\Croangels\ESV\EcommerceBundle\Entity\ArticleVignette $vignettes)
    {
        $this->vignettes[] = $vignettes;

        return $this;
    }

    /**
     * Remove vignettes
     *
     * @param \Croangels\ESV\EcommerceBundle\Entity\ArticleVignette $vignettes
     */
    public function removeVignette(\Croangels\ESV\EcommerceBundle\Entity\ArticleVignette $vignettes)
    {
        $this->vignettes->removeElement($vignettes);
    }

    /**
     * Get vignettes
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getVignettes()
    {
        return $this->vignettes;
    }
}
