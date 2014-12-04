<?php

namespace Croangels\ESV\EcommerceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\UploadedFile;
/**
 * ArticleVignette
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Croangels\ESV\EcommerceBundle\Entity\ArticleVignetteRepository")
 */
class ArticleVignette
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
     * @ORM\Column(name="url", type="string", length=255)
     */
    private $url;

    /**
     * @var string
     *
     * @ORM\Column(name="alt", type="string", length=255, nullable=true)
     */
    private $alt;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=true)
     */
    private $title;

    /**
     * @var boolean
     *
     * @ORM\Column(name="isMaster", type="boolean")
     */
    private $isMaster = false;

    /**
    * @ORM\ManyToOne(targetEntity="Article", inversedBy="vignettes", cascade={"persist"})
    * @ORM\JoinColumn(name="article_id", referencedColumnName="id")
    **/
    private $article;

    private $updated;
    private function setUpdated($value){ $this->updated = $value; return $this; }

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
     * Set url
     *
     * @param string $url
     * @return ArticleVignette
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set alt
     *
     * @param string $alt
     * @return ArticleVignette
     */
    public function setAlt($alt)
    {
        $this->alt = $alt;

        return $this;
    }

    /**
     * Get alt
     *
     * @return string
     */
    public function getAlt()
    {
        return $this->alt;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return ArticleVignette
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set isMaster
     *
     * @param boolean $isMaster
     * @return ArticleVignette
     */
    public function setIsMaster($isMaster)
    {
        $this->isMaster = $isMaster;

        return $this;
    }

    /**
     * Get isMaster
     *
     * @return boolean
     */
    public function getIsMaster()
    {
        return $this->isMaster;
    }

    /**
     * Set article
     *
     * @param \Croangels\ESV\EcommerceBundle\Entity\Article $article
     * @return ArticleVignette
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



    /*
    //  FILE UPLOAD :
    */
    public function getAbsolutePath()
    {
      return null === $this->path ? null : $this->getUploadRootDir().'/'.$this->path;
    }

    public function getWebPath()
    {
      return null === $this->path ? null : $this->getUploadDir().'/'.$this->path;
    }

    protected function getUploadRootDir()
    {
      // le chemin absolu du répertoire où les documents uploadés doivent être sauvegardés
      return __DIR__.'/../../../../web/'.$this->getUploadDir();
    }

    protected function getUploadDir()
    {
      // on se débarrasse de « __DIR__ » afin de ne pas avoir de problème lorsqu'on affiche
      // le document/image dans la vue.
      return 'ressources/img/uploads';
    }

    /**
    * Unmapped property to handle file uploads
    */
    private $file;

    /**
     * Sets file.
     *
     * @param UploadedFile $file
     */
    public function setFile(UploadedFile $file = null)
    {
        $this->file = $file;
    }

    /**
     * Get file.
     *
     * @return UploadedFile
     */
    public function getFile()
    {
        return $this->file;
    }

    public function getUniqId()
    {
      return md5(sha1(uniqid()));
    }

    /**
     * Manages the copying of the file to the relevant place on the server
     */
    public function upload()
    {

        // the file property can be empty if the field is not required
        if (null === $this->getFile())
        {
            return;
        }

        // we use the original file name here but you should
        // sanitize it at least to avoid any security issues

        $nom = $this->getUniqId();

        // move takes the target directory and target filename as params
        $this->getFile()->move
        (
            $this->getUploadRootDir(),
            $nom
        );

        // set the path property to the filename where you've saved the file
        $this->url = $this->getUploadDir().$nom;

        // clean up the file property as you won't need it anymore
        $this->setFile(null);
    }

    /**
     * Lifecycle callback to upload the file to the server
     */
    public function lifecycleFileUpload()
    {
        $this->upload();
    }

    /**
     * Updates the hash value to force the preUpdate and postUpdate events to fire
     */
    public function refreshUpdated()
    {
        $this->setUpdated(new \DateTime("now"));
    }

    // ... the rest of your class lives under here, including the generated fields
    //     such as filename and updated

    public function __toString()
    {
      return $this->getUrl().' - '.$this->getAlt();
    }












}
