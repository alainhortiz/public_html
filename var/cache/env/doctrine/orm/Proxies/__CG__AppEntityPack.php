<?php

namespace Proxies\__CG__\App\Entity;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Pack extends \App\Entity\Pack implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Pack' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Pack' . "\0" . 'nombre', '' . "\0" . 'App\\Entity\\Pack' . "\0" . 'imagen', '' . "\0" . 'App\\Entity\\Pack' . "\0" . 'beneficioxventa', '' . "\0" . 'App\\Entity\\Pack' . "\0" . 'tipodemoneda', '' . "\0" . 'App\\Entity\\Pack' . "\0" . 'isActive', '' . "\0" . 'App\\Entity\\Pack' . "\0" . 'productos', '' . "\0" . 'App\\Entity\\Pack' . "\0" . 'ventas'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Pack' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Pack' . "\0" . 'nombre', '' . "\0" . 'App\\Entity\\Pack' . "\0" . 'imagen', '' . "\0" . 'App\\Entity\\Pack' . "\0" . 'beneficioxventa', '' . "\0" . 'App\\Entity\\Pack' . "\0" . 'tipodemoneda', '' . "\0" . 'App\\Entity\\Pack' . "\0" . 'isActive', '' . "\0" . 'App\\Entity\\Pack' . "\0" . 'productos', '' . "\0" . 'App\\Entity\\Pack' . "\0" . 'ventas'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Pack $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
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
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load(): void
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized(): bool
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized): void
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null): void
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer(): ?\Closure
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null): void
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner(): ?\Closure
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties(): array
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId(): ?int
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getNombre(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNombre', []);

        return parent::getNombre();
    }

    /**
     * {@inheritDoc}
     */
    public function setNombre(?string $nombre): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNombre', [$nombre]);

        parent::setNombre($nombre);
    }

    /**
     * {@inheritDoc}
     */
    public function getImagen(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImagen', []);

        return parent::getImagen();
    }

    /**
     * {@inheritDoc}
     */
    public function setImagen(?string $imagen): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImagen', [$imagen]);

        parent::setImagen($imagen);
    }

    /**
     * {@inheritDoc}
     */
    public function getBeneficioxventa(): ?float
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBeneficioxventa', []);

        return parent::getBeneficioxventa();
    }

    /**
     * {@inheritDoc}
     */
    public function setBeneficioxventa(?float $beneficioxventa): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBeneficioxventa', [$beneficioxventa]);

        parent::setBeneficioxventa($beneficioxventa);
    }

    /**
     * {@inheritDoc}
     */
    public function getTipodemoneda(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTipodemoneda', []);

        return parent::getTipodemoneda();
    }

    /**
     * {@inheritDoc}
     */
    public function setTipodemoneda(?string $tipodemoneda): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTipodemoneda', [$tipodemoneda]);

        parent::setTipodemoneda($tipodemoneda);
    }

    /**
     * {@inheritDoc}
     */
    public function isActive(): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isActive', []);

        return parent::isActive();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsActive(bool $isActive): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsActive', [$isActive]);

        parent::setIsActive($isActive);
    }

    /**
     * {@inheritDoc}
     */
    public function getProductos(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProductos', []);

        return parent::getProductos();
    }

    /**
     * {@inheritDoc}
     */
    public function addProductos(\App\Entity\PackProducto $productos): \App\Entity\Pack
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addProductos', [$productos]);

        return parent::addProductos($productos);
    }

    /**
     * {@inheritDoc}
     */
    public function removeProductos(\App\Entity\PackProducto $productos): \App\Entity\Pack
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeProductos', [$productos]);

        return parent::removeProductos($productos);
    }

    /**
     * {@inheritDoc}
     */
    public function getVentas(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVentas', []);

        return parent::getVentas();
    }

    /**
     * {@inheritDoc}
     */
    public function addVentas(\App\Entity\VentaProducto $ventas): \App\Entity\Pack
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addVentas', [$ventas]);

        return parent::addVentas($ventas);
    }

    /**
     * {@inheritDoc}
     */
    public function removeVentas(\App\Entity\VentaProducto $ventas): \App\Entity\Pack
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeVentas', [$ventas]);

        return parent::removeVentas($ventas);
    }

    /**
     * {@inheritDoc}
     */
    public function cantidadVentas(): int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'cantidadVentas', []);

        return parent::cantidadVentas();
    }

}
