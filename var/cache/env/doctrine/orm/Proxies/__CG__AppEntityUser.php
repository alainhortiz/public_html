<?php

namespace Proxies\__CG__\App\Entity;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class User extends \App\Entity\User implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\User' . "\0" . 'id', '' . "\0" . 'App\\Entity\\User' . "\0" . 'email', '' . "\0" . 'App\\Entity\\User' . "\0" . 'roles', '' . "\0" . 'App\\Entity\\User' . "\0" . 'password', '' . "\0" . 'App\\Entity\\User' . "\0" . 'nombre', '' . "\0" . 'App\\Entity\\User' . "\0" . 'apellidos', '' . "\0" . 'App\\Entity\\User' . "\0" . 'empresa', '' . "\0" . 'App\\Entity\\User' . "\0" . 'nifcif', '' . "\0" . 'App\\Entity\\User' . "\0" . 'direccion', '' . "\0" . 'App\\Entity\\User' . "\0" . 'poblacion', '' . "\0" . 'App\\Entity\\User' . "\0" . 'provincia', '' . "\0" . 'App\\Entity\\User' . "\0" . 'pais', '' . "\0" . 'App\\Entity\\User' . "\0" . 'codigoPostal', '' . "\0" . 'App\\Entity\\User' . "\0" . 'telefono', '' . "\0" . 'App\\Entity\\User' . "\0" . 'emitirfactura', '' . "\0" . 'App\\Entity\\User' . "\0" . 'isActive', '' . "\0" . 'App\\Entity\\User' . "\0" . 'avatar', '' . "\0" . 'App\\Entity\\User' . "\0" . 'saldoGeneralUSD', '' . "\0" . 'App\\Entity\\User' . "\0" . 'saldoInicialGeneralUSD', '' . "\0" . 'App\\Entity\\User' . "\0" . 'saldoGeneralEUR', '' . "\0" . 'App\\Entity\\User' . "\0" . 'saldoInicialGeneralEUR', '' . "\0" . 'App\\Entity\\User' . "\0" . 'saldoLibroUSD', '' . "\0" . 'App\\Entity\\User' . "\0" . 'saldoInicialLibroUSD', '' . "\0" . 'App\\Entity\\User' . "\0" . 'saldoServicioUSD', '' . "\0" . 'App\\Entity\\User' . "\0" . 'saldoInicialServicioUSD', '' . "\0" . 'App\\Entity\\User' . "\0" . 'saldoServicioEUR', '' . "\0" . 'App\\Entity\\User' . "\0" . 'saldoInicialServicioEUR', '' . "\0" . 'App\\Entity\\User' . "\0" . 'saldoLibroEUR', '' . "\0" . 'App\\Entity\\User' . "\0" . 'saldoInicialLibroEUR', '' . "\0" . 'App\\Entity\\User' . "\0" . 'productos', '' . "\0" . 'App\\Entity\\User' . "\0" . 'solicitudesPagos', '' . "\0" . 'App\\Entity\\User' . "\0" . 'solicitudesRecogidas', '' . "\0" . 'App\\Entity\\User' . "\0" . 'notificaciones', '' . "\0" . 'App\\Entity\\User' . "\0" . 'movimientos', '' . "\0" . 'App\\Entity\\User' . "\0" . 'direccionRecogida', '' . "\0" . 'App\\Entity\\User' . "\0" . 'ingresos', '' . "\0" . 'App\\Entity\\User' . "\0" . 'retiros', '' . "\0" . 'App\\Entity\\User' . "\0" . 'bizums', '' . "\0" . 'App\\Entity\\User' . "\0" . 'transferenciasbancarias', '' . "\0" . 'App\\Entity\\User' . "\0" . 'paypals', '' . "\0" . 'App\\Entity\\User' . "\0" . 'westerunions', '' . "\0" . 'App\\Entity\\User' . "\0" . 'amortizaciones'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\User' . "\0" . 'id', '' . "\0" . 'App\\Entity\\User' . "\0" . 'email', '' . "\0" . 'App\\Entity\\User' . "\0" . 'roles', '' . "\0" . 'App\\Entity\\User' . "\0" . 'password', '' . "\0" . 'App\\Entity\\User' . "\0" . 'nombre', '' . "\0" . 'App\\Entity\\User' . "\0" . 'apellidos', '' . "\0" . 'App\\Entity\\User' . "\0" . 'empresa', '' . "\0" . 'App\\Entity\\User' . "\0" . 'nifcif', '' . "\0" . 'App\\Entity\\User' . "\0" . 'direccion', '' . "\0" . 'App\\Entity\\User' . "\0" . 'poblacion', '' . "\0" . 'App\\Entity\\User' . "\0" . 'provincia', '' . "\0" . 'App\\Entity\\User' . "\0" . 'pais', '' . "\0" . 'App\\Entity\\User' . "\0" . 'codigoPostal', '' . "\0" . 'App\\Entity\\User' . "\0" . 'telefono', '' . "\0" . 'App\\Entity\\User' . "\0" . 'emitirfactura', '' . "\0" . 'App\\Entity\\User' . "\0" . 'isActive', '' . "\0" . 'App\\Entity\\User' . "\0" . 'avatar', '' . "\0" . 'App\\Entity\\User' . "\0" . 'saldoGeneralUSD', '' . "\0" . 'App\\Entity\\User' . "\0" . 'saldoInicialGeneralUSD', '' . "\0" . 'App\\Entity\\User' . "\0" . 'saldoGeneralEUR', '' . "\0" . 'App\\Entity\\User' . "\0" . 'saldoInicialGeneralEUR', '' . "\0" . 'App\\Entity\\User' . "\0" . 'saldoLibroUSD', '' . "\0" . 'App\\Entity\\User' . "\0" . 'saldoInicialLibroUSD', '' . "\0" . 'App\\Entity\\User' . "\0" . 'saldoServicioUSD', '' . "\0" . 'App\\Entity\\User' . "\0" . 'saldoInicialServicioUSD', '' . "\0" . 'App\\Entity\\User' . "\0" . 'saldoServicioEUR', '' . "\0" . 'App\\Entity\\User' . "\0" . 'saldoInicialServicioEUR', '' . "\0" . 'App\\Entity\\User' . "\0" . 'saldoLibroEUR', '' . "\0" . 'App\\Entity\\User' . "\0" . 'saldoInicialLibroEUR', '' . "\0" . 'App\\Entity\\User' . "\0" . 'productos', '' . "\0" . 'App\\Entity\\User' . "\0" . 'solicitudesPagos', '' . "\0" . 'App\\Entity\\User' . "\0" . 'solicitudesRecogidas', '' . "\0" . 'App\\Entity\\User' . "\0" . 'notificaciones', '' . "\0" . 'App\\Entity\\User' . "\0" . 'movimientos', '' . "\0" . 'App\\Entity\\User' . "\0" . 'direccionRecogida', '' . "\0" . 'App\\Entity\\User' . "\0" . 'ingresos', '' . "\0" . 'App\\Entity\\User' . "\0" . 'retiros', '' . "\0" . 'App\\Entity\\User' . "\0" . 'bizums', '' . "\0" . 'App\\Entity\\User' . "\0" . 'transferenciasbancarias', '' . "\0" . 'App\\Entity\\User' . "\0" . 'paypals', '' . "\0" . 'App\\Entity\\User' . "\0" . 'westerunions', '' . "\0" . 'App\\Entity\\User' . "\0" . 'amortizaciones'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (User $proxy) {
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
    public function __setInitializer(?\Closure $initializer = null): void
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
    public function __setCloner(?\Closure $cloner = null): void
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
    public function getEmail(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmail', []);

        return parent::getEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmail(string $email): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmail', [$email]);

        return parent::setEmail($email);
    }

    /**
     * {@inheritDoc}
     */
    public function getUserIdentifier(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUserIdentifier', []);

        return parent::getUserIdentifier();
    }

    /**
     * {@inheritDoc}
     */
    public function getUsername(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUsername', []);

        return parent::getUsername();
    }

    /**
     * {@inheritDoc}
     */
    public function getRoles(): array
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRoles', []);

        return parent::getRoles();
    }

    /**
     * {@inheritDoc}
     */
    public function setRoles(array $roles): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRoles', [$roles]);

        return parent::setRoles($roles);
    }

    /**
     * {@inheritDoc}
     */
    public function getPassword(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPassword', []);

        return parent::getPassword();
    }

    /**
     * {@inheritDoc}
     */
    public function setPassword(string $password): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPassword', [$password]);

        return parent::setPassword($password);
    }

    /**
     * {@inheritDoc}
     */
    public function getSalt(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSalt', []);

        return parent::getSalt();
    }

    /**
     * {@inheritDoc}
     */
    public function eraseCredentials()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'eraseCredentials', []);

        return parent::eraseCredentials();
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
    public function setNombre(?string $nombre): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNombre', [$nombre]);

        return parent::setNombre($nombre);
    }

    /**
     * {@inheritDoc}
     */
    public function getApellidos(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getApellidos', []);

        return parent::getApellidos();
    }

    /**
     * {@inheritDoc}
     */
    public function setApellidos(?string $apellidos): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setApellidos', [$apellidos]);

        return parent::setApellidos($apellidos);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmpresa(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmpresa', []);

        return parent::getEmpresa();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmpresa(?string $empresa): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmpresa', [$empresa]);

        return parent::setEmpresa($empresa);
    }

    /**
     * {@inheritDoc}
     */
    public function getNifcif(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNifcif', []);

        return parent::getNifcif();
    }

    /**
     * {@inheritDoc}
     */
    public function setNifcif(?string $nifcif): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNifcif', [$nifcif]);

        return parent::setNifcif($nifcif);
    }

    /**
     * {@inheritDoc}
     */
    public function getDireccion(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDireccion', []);

        return parent::getDireccion();
    }

    /**
     * {@inheritDoc}
     */
    public function setDireccion(?string $direccion): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDireccion', [$direccion]);

        return parent::setDireccion($direccion);
    }

    /**
     * {@inheritDoc}
     */
    public function getPoblacion(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPoblacion', []);

        return parent::getPoblacion();
    }

    /**
     * {@inheritDoc}
     */
    public function setPoblacion(?string $poblacion): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPoblacion', [$poblacion]);

        return parent::setPoblacion($poblacion);
    }

    /**
     * {@inheritDoc}
     */
    public function getProvincia(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProvincia', []);

        return parent::getProvincia();
    }

    /**
     * {@inheritDoc}
     */
    public function setProvincia(string $provincia): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProvincia', [$provincia]);

        return parent::setProvincia($provincia);
    }

    /**
     * {@inheritDoc}
     */
    public function getPais(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPais', []);

        return parent::getPais();
    }

    /**
     * {@inheritDoc}
     */
    public function setPais(?string $pais): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPais', [$pais]);

        return parent::setPais($pais);
    }

    /**
     * {@inheritDoc}
     */
    public function getTelefono(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTelefono', []);

        return parent::getTelefono();
    }

    /**
     * {@inheritDoc}
     */
    public function setTelefono(?string $telefono): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTelefono', [$telefono]);

        return parent::setTelefono($telefono);
    }

    /**
     * {@inheritDoc}
     */
    public function getCodigoPostal(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCodigoPostal', []);

        return parent::getCodigoPostal();
    }

    /**
     * {@inheritDoc}
     */
    public function setCodigoPostal(?string $codigoPostal): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCodigoPostal', [$codigoPostal]);

        return parent::setCodigoPostal($codigoPostal);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmitirfactura(): ?bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmitirfactura', []);

        return parent::getEmitirfactura();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmitirfactura(?bool $emitirfactura): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmitirfactura', [$emitirfactura]);

        return parent::setEmitirfactura($emitirfactura);
    }

    /**
     * {@inheritDoc}
     */
    public function __toString(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
    }

    /**
     * {@inheritDoc}
     */
    public function getIsActive()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsActive', []);

        return parent::getIsActive();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsActive($isActive): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsActive', [$isActive]);

        parent::setIsActive($isActive);
    }

    /**
     * {@inheritDoc}
     */
    public function getAvatar(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAvatar', []);

        return parent::getAvatar();
    }

    /**
     * {@inheritDoc}
     */
    public function setAvatar(?string $avatar): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAvatar', [$avatar]);

        return parent::setAvatar($avatar);
    }

    /**
     * {@inheritDoc}
     */
    public function getSaldoGeneralUSD(): ?float
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSaldoGeneralUSD', []);

        return parent::getSaldoGeneralUSD();
    }

    /**
     * {@inheritDoc}
     */
    public function setSaldoGeneralUSD(float $saldoGeneralUSD): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSaldoGeneralUSD', [$saldoGeneralUSD]);

        return parent::setSaldoGeneralUSD($saldoGeneralUSD);
    }

    /**
     * {@inheritDoc}
     */
    public function getSaldoGeneralEUR(): ?float
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSaldoGeneralEUR', []);

        return parent::getSaldoGeneralEUR();
    }

    /**
     * {@inheritDoc}
     */
    public function setSaldoGeneralEUR(float $saldoGeneralEUR): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSaldoGeneralEUR', [$saldoGeneralEUR]);

        return parent::setSaldoGeneralEUR($saldoGeneralEUR);
    }

    /**
     * {@inheritDoc}
     */
    public function getSaldoLibroUSD(): ?float
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSaldoLibroUSD', []);

        return parent::getSaldoLibroUSD();
    }

    /**
     * {@inheritDoc}
     */
    public function setSaldoLibroUSD(float $saldoLibroUSD): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSaldoLibroUSD', [$saldoLibroUSD]);

        return parent::setSaldoLibroUSD($saldoLibroUSD);
    }

    /**
     * {@inheritDoc}
     */
    public function getSaldoServicioUSD(): ?float
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSaldoServicioUSD', []);

        return parent::getSaldoServicioUSD();
    }

    /**
     * {@inheritDoc}
     */
    public function setSaldoServicioUSD(float $saldoServicioUSD): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSaldoServicioUSD', [$saldoServicioUSD]);

        return parent::setSaldoServicioUSD($saldoServicioUSD);
    }

    /**
     * {@inheritDoc}
     */
    public function getSaldoServicioEUR(): ?float
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSaldoServicioEUR', []);

        return parent::getSaldoServicioEUR();
    }

    /**
     * {@inheritDoc}
     */
    public function setSaldoServicioEUR(float $saldoServicioEUR): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSaldoServicioEUR', [$saldoServicioEUR]);

        return parent::setSaldoServicioEUR($saldoServicioEUR);
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
    public function addProducto(\App\Entity\Producto $producto): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addProducto', [$producto]);

        return parent::addProducto($producto);
    }

    /**
     * {@inheritDoc}
     */
    public function removeProducto(\App\Entity\Producto $producto): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeProducto', [$producto]);

        return parent::removeProducto($producto);
    }

    /**
     * {@inheritDoc}
     */
    public function getSolicitudesPagos(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSolicitudesPagos', []);

        return parent::getSolicitudesPagos();
    }

    /**
     * {@inheritDoc}
     */
    public function addSolicitudesPago(\App\Entity\SolicitarPagoRoyalAcumulado $solicitudesPago): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addSolicitudesPago', [$solicitudesPago]);

        return parent::addSolicitudesPago($solicitudesPago);
    }

    /**
     * {@inheritDoc}
     */
    public function removeSolicitudesPago(\App\Entity\SolicitarPagoRoyalAcumulado $solicitudesPago): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeSolicitudesPago', [$solicitudesPago]);

        return parent::removeSolicitudesPago($solicitudesPago);
    }

    /**
     * {@inheritDoc}
     */
    public function getSolicitudesRecogidas(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSolicitudesRecogidas', []);

        return parent::getSolicitudesRecogidas();
    }

    /**
     * {@inheritDoc}
     */
    public function addSolicitudesRecogida(\App\Entity\SolicitarRecogida $solicitudesRecogida): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addSolicitudesRecogida', [$solicitudesRecogida]);

        return parent::addSolicitudesRecogida($solicitudesRecogida);
    }

    /**
     * {@inheritDoc}
     */
    public function removeSolicitudesRecogida(\App\Entity\SolicitarRecogida $solicitudesRecogida): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeSolicitudesRecogida', [$solicitudesRecogida]);

        return parent::removeSolicitudesRecogida($solicitudesRecogida);
    }

    /**
     * {@inheritDoc}
     */
    public function getSaldoLibroEUR(): ?float
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSaldoLibroEUR', []);

        return parent::getSaldoLibroEUR();
    }

    /**
     * {@inheritDoc}
     */
    public function setSaldoLibroEUR(float $saldoLibroEUR): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSaldoLibroEUR', [$saldoLibroEUR]);

        return parent::setSaldoLibroEUR($saldoLibroEUR);
    }

    /**
     * {@inheritDoc}
     */
    public function getNotificaciones(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNotificaciones', []);

        return parent::getNotificaciones();
    }

    /**
     * {@inheritDoc}
     */
    public function addNotificacione(\App\Entity\Notificacion $notificacione): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addNotificacione', [$notificacione]);

        return parent::addNotificacione($notificacione);
    }

    /**
     * {@inheritDoc}
     */
    public function removeNotificacione(\App\Entity\Notificacion $notificacione): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeNotificacione', [$notificacione]);

        return parent::removeNotificacione($notificacione);
    }

    /**
     * {@inheritDoc}
     */
    public function getMovimientos(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMovimientos', []);

        return parent::getMovimientos();
    }

    /**
     * {@inheritDoc}
     */
    public function addMovimientos(\App\Entity\EstadoFondo $movimientos): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addMovimientos', [$movimientos]);

        return parent::addMovimientos($movimientos);
    }

    /**
     * {@inheritDoc}
     */
    public function removeMovimientos(\App\Entity\EstadoFondo $movimientos): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeMovimientos', [$movimientos]);

        return parent::removeMovimientos($movimientos);
    }

    /**
     * {@inheritDoc}
     */
    public function getDireccionRecogida(): ?\App\Entity\DireccionRecogida
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDireccionRecogida', []);

        return parent::getDireccionRecogida();
    }

    /**
     * {@inheritDoc}
     */
    public function setDireccionRecogida(?\App\Entity\DireccionRecogida $direccionRecogida): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDireccionRecogida', [$direccionRecogida]);

        return parent::setDireccionRecogida($direccionRecogida);
    }

    /**
     * {@inheritDoc}
     */
    public function getIngresos(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIngresos', []);

        return parent::getIngresos();
    }

    /**
     * {@inheritDoc}
     */
    public function addIngreso(\App\Entity\IngresoSaldo $ingresoSaldo): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addIngreso', [$ingresoSaldo]);

        return parent::addIngreso($ingresoSaldo);
    }

    /**
     * {@inheritDoc}
     */
    public function removeIngreso(\App\Entity\IngresoSaldo $ingresoSaldo): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeIngreso', [$ingresoSaldo]);

        return parent::removeIngreso($ingresoSaldo);
    }

    /**
     * {@inheritDoc}
     */
    public function getRetiros(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRetiros', []);

        return parent::getRetiros();
    }

    /**
     * {@inheritDoc}
     */
    public function addRetiro(\App\Entity\RetiroSaldo $retiroSaldo): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addRetiro', [$retiroSaldo]);

        return parent::addRetiro($retiroSaldo);
    }

    /**
     * {@inheritDoc}
     */
    public function removeRetiro(\App\Entity\RetiroSaldo $retiroSaldo): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeRetiro', [$retiroSaldo]);

        return parent::removeRetiro($retiroSaldo);
    }

    /**
     * {@inheritDoc}
     */
    public function getBizums(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBizums', []);

        return parent::getBizums();
    }

    /**
     * {@inheritDoc}
     */
    public function addBizum(\App\Entity\Bizum $bizum): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addBizum', [$bizum]);

        return parent::addBizum($bizum);
    }

    /**
     * {@inheritDoc}
     */
    public function removeBizum(\App\Entity\Bizum $bizum): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeBizum', [$bizum]);

        return parent::removeBizum($bizum);
    }

    /**
     * {@inheritDoc}
     */
    public function getTransferenciasBancarias(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTransferenciasBancarias', []);

        return parent::getTransferenciasBancarias();
    }

    /**
     * {@inheritDoc}
     */
    public function addTransferenciaBancaria(\App\Entity\TransferenciaBancaria $transferenciaBancaria): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addTransferenciaBancaria', [$transferenciaBancaria]);

        return parent::addTransferenciaBancaria($transferenciaBancaria);
    }

    /**
     * {@inheritDoc}
     */
    public function removeTransferenciaBancaria(\App\Entity\TransferenciaBancaria $transferenciaBancaria): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeTransferenciaBancaria', [$transferenciaBancaria]);

        return parent::removeTransferenciaBancaria($transferenciaBancaria);
    }

    /**
     * {@inheritDoc}
     */
    public function getPaypals(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPaypals', []);

        return parent::getPaypals();
    }

    /**
     * {@inheritDoc}
     */
    public function addPaypal(\App\Entity\Paypal $paypal): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addPaypal', [$paypal]);

        return parent::addPaypal($paypal);
    }

    /**
     * {@inheritDoc}
     */
    public function removePaypal(\App\Entity\Paypal $paypal): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removePaypal', [$paypal]);

        return parent::removePaypal($paypal);
    }

    /**
     * {@inheritDoc}
     */
    public function getWesterunions(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getWesterunions', []);

        return parent::getWesterunions();
    }

    /**
     * {@inheritDoc}
     */
    public function addWesterunion(\App\Entity\Westerunion $westerunion): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addWesterunion', [$westerunion]);

        return parent::addWesterunion($westerunion);
    }

    /**
     * {@inheritDoc}
     */
    public function removeWesterunion(\App\Entity\Westerunion $westerunion): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeWesterunion', [$westerunion]);

        return parent::removeWesterunion($westerunion);
    }

    /**
     * {@inheritDoc}
     */
    public function getSaldoInicialGeneralUSD(): int|float
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSaldoInicialGeneralUSD', []);

        return parent::getSaldoInicialGeneralUSD();
    }

    /**
     * {@inheritDoc}
     */
    public function setSaldoInicialGeneralUSD(int|float $saldoInicialGeneralUSD): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSaldoInicialGeneralUSD', [$saldoInicialGeneralUSD]);

        parent::setSaldoInicialGeneralUSD($saldoInicialGeneralUSD);
    }

    /**
     * {@inheritDoc}
     */
    public function getSaldoInicialGeneralEUR(): int|float
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSaldoInicialGeneralEUR', []);

        return parent::getSaldoInicialGeneralEUR();
    }

    /**
     * {@inheritDoc}
     */
    public function setSaldoInicialGeneralEUR(int|float $saldoInicialGeneralEUR): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSaldoInicialGeneralEUR', [$saldoInicialGeneralEUR]);

        parent::setSaldoInicialGeneralEUR($saldoInicialGeneralEUR);
    }

    /**
     * {@inheritDoc}
     */
    public function getSaldoInicialLibroUSD(): int|float
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSaldoInicialLibroUSD', []);

        return parent::getSaldoInicialLibroUSD();
    }

    /**
     * {@inheritDoc}
     */
    public function setSaldoInicialLibroUSD(int|float $saldoInicialLibroUSD): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSaldoInicialLibroUSD', [$saldoInicialLibroUSD]);

        parent::setSaldoInicialLibroUSD($saldoInicialLibroUSD);
    }

    /**
     * {@inheritDoc}
     */
    public function getSaldoInicialServicioUSD(): int|float
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSaldoInicialServicioUSD', []);

        return parent::getSaldoInicialServicioUSD();
    }

    /**
     * {@inheritDoc}
     */
    public function setSaldoInicialServicioUSD(int|float $saldoInicialServicioUSD): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSaldoInicialServicioUSD', [$saldoInicialServicioUSD]);

        parent::setSaldoInicialServicioUSD($saldoInicialServicioUSD);
    }

    /**
     * {@inheritDoc}
     */
    public function getSaldoInicialServicioEUR(): int|float
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSaldoInicialServicioEUR', []);

        return parent::getSaldoInicialServicioEUR();
    }

    /**
     * {@inheritDoc}
     */
    public function setSaldoInicialServicioEUR(int|float $saldoInicialServicioEUR): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSaldoInicialServicioEUR', [$saldoInicialServicioEUR]);

        parent::setSaldoInicialServicioEUR($saldoInicialServicioEUR);
    }

    /**
     * {@inheritDoc}
     */
    public function getSaldoInicialLibroEUR(): int|float
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSaldoInicialLibroEUR', []);

        return parent::getSaldoInicialLibroEUR();
    }

    /**
     * {@inheritDoc}
     */
    public function setSaldoInicialLibroEUR(int|float $saldoInicialLibroEUR): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSaldoInicialLibroEUR', [$saldoInicialLibroEUR]);

        parent::setSaldoInicialLibroEUR($saldoInicialLibroEUR);
    }

    /**
     * {@inheritDoc}
     */
    public function getAmortizaciones(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAmortizaciones', []);

        return parent::getAmortizaciones();
    }

    /**
     * {@inheritDoc}
     */
    public function addAmortizacion(\App\Entity\ProductoAmortizacion $amortizacion): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addAmortizacion', [$amortizacion]);

        return parent::addAmortizacion($amortizacion);
    }

    /**
     * {@inheritDoc}
     */
    public function removeAmortizacion(\App\Entity\ProductoAmortizacion $amortizacion): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeAmortizacion', [$amortizacion]);

        return parent::removeAmortizacion($amortizacion);
    }

}
