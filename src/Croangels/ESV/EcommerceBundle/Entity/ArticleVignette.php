<?php

namespace Croangels\ESV\EcommerceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

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
    * @ORM\ManyToOne(targetEntity="Article", inversedBy="vignettes")
    * @ORM\JoinColumn(name="article_id", referencedColumnName="id")
    **/
    private $article;

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
    const SERVER_PATH_TO_IMAGE_FOLDER = 'c:\\Wamp\\www\\ESV\\ressources\\img\\uploads';

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

        // move takes the target directory and target filename as params
        $this->getFile()->move
        (
            Image::SERVER_PATH_TO_IMAGE_FOLDER,
            $this->getUniqId()
        );

        // set the path property to the filename where you've saved the file
        $this->filename = $this->getFile()->getClientOriginalName();

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














}
