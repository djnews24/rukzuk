<?php

namespace Orm\Proxies\__CG__\Orm\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Website extends \Orm\Entity\Website implements \Doctrine\ORM\Proxy\Proxy
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
    public static $lazyPropertiesDefaults = array('publishingenabled' => false);



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {
        unset($this->publishingenabled);

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }

    /**
     * 
     * @param string $name
     */
    public function __get($name)
    {
        if (array_key_exists($name, $this->__getLazyProperties())) {
            $this->__initializer__ && $this->__initializer__->__invoke($this, '__get', array($name));

            return $this->$name;
        }

        trigger_error(sprintf('Undefined property: %s::$%s', __CLASS__, $name), E_USER_NOTICE);
    }

    /**
     * 
     * @param string $name
     * @param mixed  $value
     */
    public function __set($name, $value)
    {
        if (array_key_exists($name, $this->__getLazyProperties())) {
            $this->__initializer__ && $this->__initializer__->__invoke($this, '__set', array($name, $value));

            $this->$name = $value;

            return;
        }

        $this->$name = $value;
    }

    /**
     * 
     * @param  string $name
     * @return boolean
     */
    public function __isset($name)
    {
        if (array_key_exists($name, $this->__getLazyProperties())) {
            $this->__initializer__ && $this->__initializer__->__invoke($this, '__isset', array($name));

            return isset($this->$name);
        }

        return false;
    }

    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return array('__isInitialized__', '' . "\0" . 'Orm\\Entity\\Website' . "\0" . 'id', '' . "\0" . 'Orm\\Entity\\Website' . "\0" . 'shortid', '' . "\0" . 'Orm\\Entity\\Website' . "\0" . 'name', '' . "\0" . 'Orm\\Entity\\Website' . "\0" . 'description', '' . "\0" . 'Orm\\Entity\\Website' . "\0" . 'navigation', 'publishingenabled', '' . "\0" . 'Orm\\Entity\\Website' . "\0" . 'publish', '' . "\0" . 'Orm\\Entity\\Website' . "\0" . 'colorscheme', '' . "\0" . 'Orm\\Entity\\Website' . "\0" . 'resolutions', '' . "\0" . 'Orm\\Entity\\Website' . "\0" . 'version', '' . "\0" . 'Orm\\Entity\\Website' . "\0" . 'home', '' . "\0" . 'Orm\\Entity\\Website' . "\0" . 'modulerepository', '' . "\0" . 'Orm\\Entity\\Website' . "\0" . 'creationmode', '' . "\0" . 'Orm\\Entity\\Website' . "\0" . 'ismarkedfordeletion', '' . "\0" . 'Orm\\Entity\\Website' . "\0" . 'lastupdate');
        }

        return array('__isInitialized__', '' . "\0" . 'Orm\\Entity\\Website' . "\0" . 'id', '' . "\0" . 'Orm\\Entity\\Website' . "\0" . 'shortid', '' . "\0" . 'Orm\\Entity\\Website' . "\0" . 'name', '' . "\0" . 'Orm\\Entity\\Website' . "\0" . 'description', '' . "\0" . 'Orm\\Entity\\Website' . "\0" . 'navigation', '' . "\0" . 'Orm\\Entity\\Website' . "\0" . 'publish', '' . "\0" . 'Orm\\Entity\\Website' . "\0" . 'colorscheme', '' . "\0" . 'Orm\\Entity\\Website' . "\0" . 'resolutions', '' . "\0" . 'Orm\\Entity\\Website' . "\0" . 'version', '' . "\0" . 'Orm\\Entity\\Website' . "\0" . 'home', '' . "\0" . 'Orm\\Entity\\Website' . "\0" . 'modulerepository', '' . "\0" . 'Orm\\Entity\\Website' . "\0" . 'creationmode', '' . "\0" . 'Orm\\Entity\\Website' . "\0" . 'ismarkedfordeletion', '' . "\0" . 'Orm\\Entity\\Website' . "\0" . 'lastupdate');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Website $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

            unset($this->publishingenabled);
        }
    }

    /**
     * {@inheritDoc}
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());

        parent::__clone();
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
    public function setId($id)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setId', array($id));

        return parent::setId($id);
    }

    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setShortId($shortId)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setShortId', array($shortId));

        return parent::setShortId($shortId);
    }

    /**
     * {@inheritDoc}
     */
    public function getShortId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getShortId', array());

        return parent::getShortId();
    }

    /**
     * {@inheritDoc}
     */
    public function setName($name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', array($name));

        return parent::setName($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', array());

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescription($description)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', array($description));

        return parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', array());

        return parent::getDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setNavigation($navigation)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNavigation', array($navigation));

        return parent::setNavigation($navigation);
    }

    /**
     * {@inheritDoc}
     */
    public function getNavigation()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNavigation', array());

        return parent::getNavigation();
    }

    /**
     * {@inheritDoc}
     */
    public function setPublishingEnabled($publishingEnabled)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPublishingEnabled', array($publishingEnabled));

        return parent::setPublishingEnabled($publishingEnabled);
    }

    /**
     * {@inheritDoc}
     */
    public function getPublishingEnabled()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPublishingEnabled', array());

        return parent::getPublishingEnabled();
    }

    /**
     * {@inheritDoc}
     */
    public function setPublish($publish)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPublish', array($publish));

        return parent::setPublish($publish);
    }

    /**
     * {@inheritDoc}
     */
    public function getPublish()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPublish', array());

        return parent::getPublish();
    }

    /**
     * {@inheritDoc}
     */
    public function setColorscheme($colorscheme)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setColorscheme', array($colorscheme));

        return parent::setColorscheme($colorscheme);
    }

    /**
     * {@inheritDoc}
     */
    public function getColorscheme()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getColorscheme', array());

        return parent::getColorscheme();
    }

    /**
     * {@inheritDoc}
     */
    public function setResolutions($resolutions)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setResolutions', array($resolutions));

        return parent::setResolutions($resolutions);
    }

    /**
     * {@inheritDoc}
     */
    public function getResolutions()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getResolutions', array());

        return parent::getResolutions();
    }

    /**
     * {@inheritDoc}
     */
    public function setVersion($version)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVersion', array($version));

        return parent::setVersion($version);
    }

    /**
     * {@inheritDoc}
     */
    public function getVersion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVersion', array());

        return parent::getVersion();
    }

    /**
     * {@inheritDoc}
     */
    public function setHome($home)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setHome', array($home));

        return parent::setHome($home);
    }

    /**
     * {@inheritDoc}
     */
    public function getHome()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHome', array());

        return parent::getHome();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreationMode($creationMode)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreationMode', array($creationMode));

        return parent::setCreationMode($creationMode);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreationMode()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreationMode', array());

        return parent::getCreationMode();
    }

    /**
     * {@inheritDoc}
     */
    public function setMarkedForDeletion($markedForDeletion)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMarkedForDeletion', array($markedForDeletion));

        return parent::setMarkedForDeletion($markedForDeletion);
    }

    /**
     * {@inheritDoc}
     */
    public function isMarkedForDeletion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isMarkedForDeletion', array());

        return parent::isMarkedForDeletion();
    }

    /**
     * {@inheritDoc}
     */
    public function getLastupdate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLastupdate', array());

        return parent::getLastupdate();
    }

    /**
     * {@inheritDoc}
     */
    public function setLastupdate($lastupdate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLastupdate', array($lastupdate));

        return parent::setLastupdate($lastupdate);
    }

    /**
     * {@inheritDoc}
     */
    public function setModuleRepository($moduleRepo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setModuleRepository', array($moduleRepo));

        return parent::setModuleRepository($moduleRepo);
    }

    /**
     * {@inheritDoc}
     */
    public function getModuleRepository()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getModuleRepository', array());

        return parent::getModuleRepository();
    }

    /**
     * {@inheritDoc}
     */
    public function setNewGeneratedId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNewGeneratedId', array());

        return parent::setNewGeneratedId();
    }

    /**
     * {@inheritDoc}
     */
    public function toArray()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'toArray', array());

        return parent::toArray();
    }

    /**
     * {@inheritDoc}
     */
    public function toCmsData()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'toCmsData', array());

        return parent::toCmsData();
    }

}
