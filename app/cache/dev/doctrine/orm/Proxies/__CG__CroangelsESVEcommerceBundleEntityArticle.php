<?php

namespace Proxies\__CG__\Croangels\ESV\EcommerceBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Article extends \Croangels\ESV\EcommerceBundle\Entity\Article implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array();



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return array('__isInitialized__', '' . "\0" . 'Croangels\\ESV\\EcommerceBundle\\Entity\\Article' . "\0" . 'id', '' . "\0" . 'Croangels\\ESV\\EcommerceBundle\\Entity\\Article' . "\0" . 'libelle', '' . "\0" . 'Croangels\\ESV\\EcommerceBundle\\Entity\\Article' . "\0" . 'descriptionCourte', '' . "\0" . 'Croangels\\ESV\\EcommerceBundle\\Entity\\Article' . "\0" . 'descriptionLongue', '' . "\0" . 'Croangels\\ESV\\EcommerceBundle\\Entity\\Article' . "\0" . 'tarif', '' . "\0" . 'Croangels\\ESV\\EcommerceBundle\\Entity\\Article' . "\0" . 'ean', '' . "\0" . 'Croangels\\ESV\\EcommerceBundle\\Entity\\Article' . "\0" . 'categorie', '' . "\0" . 'Croangels\\ESV\\EcommerceBundle\\Entity\\Article' . "\0" . 'vignettes');
        }

        return array('__isInitialized__', '' . "\0" . 'Croangels\\ESV\\EcommerceBundle\\Entity\\Article' . "\0" . 'id', '' . "\0" . 'Croangels\\ESV\\EcommerceBundle\\Entity\\Article' . "\0" . 'libelle', '' . "\0" . 'Croangels\\ESV\\EcommerceBundle\\Entity\\Article' . "\0" . 'descriptionCourte', '' . "\0" . 'Croangels\\ESV\\EcommerceBundle\\Entity\\Article' . "\0" . 'descriptionLongue', '' . "\0" . 'Croangels\\ESV\\EcommerceBundle\\Entity\\Article' . "\0" . 'tarif', '' . "\0" . 'Croangels\\ESV\\EcommerceBundle\\Entity\\Article' . "\0" . 'ean', '' . "\0" . 'Croangels\\ESV\\EcommerceBundle\\Entity\\Article' . "\0" . 'categorie', '' . "\0" . 'Croangels\\ESV\\EcommerceBundle\\Entity\\Article' . "\0" . 'vignettes');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Article $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setLibelle($libelle)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLibelle', array($libelle));

        return parent::setLibelle($libelle);
    }

    /**
     * {@inheritDoc}
     */
    public function getLibelle()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLibelle', array());

        return parent::getLibelle();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescriptionCourte($descriptionCourte)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescriptionCourte', array($descriptionCourte));

        return parent::setDescriptionCourte($descriptionCourte);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescriptionCourte()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescriptionCourte', array());

        return parent::getDescriptionCourte();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescriptionLongue($descriptionLongue)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescriptionLongue', array($descriptionLongue));

        return parent::setDescriptionLongue($descriptionLongue);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescriptionLongue()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescriptionLongue', array());

        return parent::getDescriptionLongue();
    }

    /**
     * {@inheritDoc}
     */
    public function setTarif($tarif)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTarif', array($tarif));

        return parent::setTarif($tarif);
    }

    /**
     * {@inheritDoc}
     */
    public function getTarif()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTarif', array());

        return parent::getTarif();
    }

    /**
     * {@inheritDoc}
     */
    public function setEan($ean)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEan', array($ean));

        return parent::setEan($ean);
    }

    /**
     * {@inheritDoc}
     */
    public function getEan()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEan', array());

        return parent::getEan();
    }

    /**
     * {@inheritDoc}
     */
    public function setCategorie(\Croangels\ESV\EcommerceBundle\Entity\Categorie $categorie = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCategorie', array($categorie));

        return parent::setCategorie($categorie);
    }

    /**
     * {@inheritDoc}
     */
    public function getCategorie()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCategorie', array());

        return parent::getCategorie();
    }

    /**
     * {@inheritDoc}
     */
    public function addVignette(\Croangels\ESV\EcommerceBundle\Entity\ArticleVignette $vignettes)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addVignette', array($vignettes));

        return parent::addVignette($vignettes);
    }

    /**
     * {@inheritDoc}
     */
    public function removeVignette(\Croangels\ESV\EcommerceBundle\Entity\ArticleVignette $vignettes)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeVignette', array($vignettes));

        return parent::removeVignette($vignettes);
    }

    /**
     * {@inheritDoc}
     */
    public function getVignettes()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVignettes', array());

        return parent::getVignettes();
    }

}