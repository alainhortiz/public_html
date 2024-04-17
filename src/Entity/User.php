<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use JetBrains\PhpStorm\Pure;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Entity(repositoryClass=UserRepository::class)
 * @ORM\Table(name="`user`")
 */
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private ?int $id;

    /**
     * @ORM\Column(type="string", length=180, unique=true)
     */
    private ?string $email;

    /**
     * @ORM\Column(type="json")
     */
    private array $roles = [];

    /**
     * @var string The hashed password
     * @ORM\Column(type="string")
     */
    private string $password;

    /**
     * @ORM\Column(type="string", length=255, nullable=false)
     */
    private ?string $nombre;

    /**
     * @ORM\Column(type="string", length=255, nullable=false)
     */
    private ?string $apellidos;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private ?string $empresa;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private ?string $nifcif;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private ?string $direccion;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private ?string $poblacion;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private ?string $provincia;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private ?string $pais;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private ?string $codigoPostal;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private ?string $telefono;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $emitirfactura = false;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private bool $isActive = false;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private ?string $avatar;

    /**
     * @ORM\Column(type="decimal", precision=18, scale=2)
     */
    private float $saldoGeneralUSD = 0;

    /**
     * @ORM\Column(type="decimal", precision=18, scale=2)
     */
    private float $saldoInicialGeneralUSD = 0;

    /**
     * @ORM\Column(type="decimal", precision=18, scale=2)
     */
    private float $saldoGeneralEUR = 0;

    /**
     * @ORM\Column(type="decimal", precision=18, scale=2)
     */
    private float $saldoInicialGeneralEUR = 0;

    /**
     * @ORM\Column(type="decimal", precision=18, scale=2)
     */
    private float $saldoLibroUSD = 0;

    /**
     * @ORM\Column(type="decimal", precision=18, scale=2)
     */
    private float $saldoInicialLibroUSD = 0;

    /**
     * @ORM\Column(type="decimal", precision=18, scale=2)
     */
    private float $saldoServicioUSD = 0;

    /**
     * @ORM\Column(type="decimal", precision=18, scale=2)
     */
    private float $saldoInicialServicioUSD = 0;

    /**
     * @ORM\Column(type="decimal", precision=18, scale=2)
     */
    private float $saldoServicioEUR = 0;

    /**
     * @ORM\Column(type="decimal", precision=18, scale=2)
     */
    private float $saldoInicialServicioEUR = 0;

    /**
     * @ORM\Column(type="decimal", precision=18, scale=2)
     */
    private float $saldoLibroEUR = 0;

    /**
     * @ORM\Column(type="decimal", precision=18, scale=2)
     */
    private float $saldoInicialLibroEUR = 0;

    /**
     * @ORM\OneToMany(targetEntity=Producto::class, mappedBy="user", orphanRemoval=true)
     */
    private $productos;

    /**
     * @ORM\OneToMany(targetEntity=SolicitarPagoRoyalAcumulado::class, mappedBy="user", orphanRemoval=true)
     */
    private $solicitudesPagos;

    /**
     * @ORM\OneToMany(targetEntity=SolicitarRecogida::class, mappedBy="user", orphanRemoval=true)
     */
    private $solicitudesRecogidas;

    /**
     * @ORM\OneToMany(targetEntity=Notificacion::class, mappedBy="user", orphanRemoval=true)
     */
    private $notificaciones;

    /**
     * @ORM\OneToMany(targetEntity=EstadoFondo::class, mappedBy="user", orphanRemoval=true)
     */
    private $movimientos;

    /**
     * @ORM\OneToOne(targetEntity=DireccionRecogida::class, mappedBy="user", cascade={"persist", "remove"})
     */
    private ?DireccionRecogida $direccionRecogida;

    /**
     * @ORM\OneToMany(targetEntity=IngresoSaldo::class, mappedBy="user", orphanRemoval=true)
     */
    private $ingresos;

    /**
     * @ORM\OneToMany(targetEntity=RetiroSaldo::class, mappedBy="user", orphanRemoval=true)
     */
    private $retiros;

    /**
     * @ORM\OneToMany(targetEntity=Bizum::class, mappedBy="user", orphanRemoval=true)
     */
    private $bizums;

    /**
     * @ORM\OneToMany(targetEntity=TransferenciaBancaria::class, mappedBy="user", orphanRemoval=true)
     */
    private $transferenciasbancarias;

    /**
     * @ORM\OneToMany(targetEntity=Paypal::class, mappedBy="user", orphanRemoval=true)
     */
    private $paypals;

    /**
     * @ORM\OneToMany(targetEntity=Westerunion::class, mappedBy="user", orphanRemoval=true)
     */
    private $westerunions;

    /**
     * @ORM\OneToMany(targetEntity=ProductoAmortizacion::class, mappedBy="user", orphanRemoval=true)
     */
    private $amortizaciones;

    #[Pure] public function __construct()
    {
        $this->productos = new ArrayCollection();
        $this->solicitudesPagos = new ArrayCollection();
        $this->solicitudesRecogidas = new ArrayCollection();
        $this->notificaciones = new ArrayCollection();
        $this->movimientos = new ArrayCollection();
        $this->ingresos = new ArrayCollection();
        $this->retiros = new ArrayCollection();
        $this->bizums = new ArrayCollection();
        $this->transferenciasbancarias = new ArrayCollection();
        $this->paypals = new ArrayCollection();
        $this->westerunions = new ArrayCollection();
        $this->amortizaciones = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUserIdentifier(): string
    {
        return (string)$this->email;
    }

    /**
     * @deprecated since Symfony 5.3, use getUserIdentifier instead
     */
    public function getUsername(): string
    {
        return (string)$this->email;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see PasswordAuthenticatedUserInterface
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Returning a salt is only needed, if you are not using a modern
     * hashing algorithm (e.g. bcrypt or sodium) in your security.yaml.
     *
     * @see UserInterface
     */
    public function getSalt(): ?string
    {
        return null;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(?string $nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getApellidos(): ?string
    {
        return $this->apellidos;
    }

    public function setApellidos(?string $apellidos): self
    {
        $this->apellidos = $apellidos;

        return $this;
    }

    public function getEmpresa(): ?string
    {
        return $this->empresa;
    }

    public function setEmpresa(?string $empresa): self
    {
        $this->empresa = $empresa;

        return $this;
    }

    public function getNifcif(): ?string
    {
        return $this->nifcif;
    }

    public function setNifcif(?string $nifcif): self
    {
        $this->nifcif = $nifcif;

        return $this;
    }

    public function getDireccion(): ?string
    {
        return $this->direccion;
    }

    public function setDireccion(?string $direccion): self
    {
        $this->direccion = $direccion;

        return $this;
    }

    public function getPoblacion(): ?string
    {
        return $this->poblacion;
    }

    public function setPoblacion(?string $poblacion): self
    {
        $this->poblacion = $poblacion;

        return $this;
    }

    public function getProvincia(): ?string
    {
        return $this->provincia;
    }

    public function setProvincia(string $provincia): self
    {
        $this->provincia = $provincia;

        return $this;
    }

    public function getPais(): ?string
    {
        return $this->pais;
    }

    public function setPais(?string $pais): self
    {
        $this->pais = $pais;

        return $this;
    }

    public function getTelefono(): ?string
    {
        return $this->telefono;
    }

    public function setTelefono(?string $telefono): self
    {
        $this->telefono = $telefono;

        return $this;
    }

    public function getCodigoPostal(): ?string
    {
        return $this->codigoPostal;
    }

    public function setCodigoPostal(?string $codigoPostal): self
    {
        $this->codigoPostal = $codigoPostal;

        return $this;
    }

    public function getEmitirfactura(): ?bool
    {
        return $this->emitirfactura;
    }

    public function setEmitirfactura(?bool $emitirfactura): self
    {
        $this->emitirfactura = $emitirfactura;

        return $this;
    }

    public function __toString()
    {
        return $this->nombre;
    }

    public function getIsActive()
    {
        return $this->isActive;
    }

    public function setIsActive($isActive): void
    {
        $this->isActive = $isActive;
    }

    public function getAvatar(): ?string
    {
        return $this->avatar;
    }

    public function setAvatar(?string $avatar): self
    {
        $this->avatar = $avatar;

        return $this;
    }

    public function getSaldoGeneralUSD(): ?float
    {
        return $this->saldoGeneralUSD;
    }

    public function setSaldoGeneralUSD(float $saldoGeneralUSD): self
    {
        $this->saldoGeneralUSD = $saldoGeneralUSD;

        return $this;
    }

    public function getSaldoGeneralEUR(): ?float
    {
        return $this->saldoGeneralEUR;
    }

    public function setSaldoGeneralEUR(float $saldoGeneralEUR): self
    {
        $this->saldoGeneralEUR = $saldoGeneralEUR;

        return $this;
    }

    public function getSaldoLibroUSD(): ?float
    {
        return $this->saldoLibroUSD;
    }

    public function setSaldoLibroUSD(float $saldoLibroUSD): self
    {
        $this->saldoLibroUSD = $saldoLibroUSD;

        return $this;
    }

    public function getSaldoServicioUSD(): ?float
    {
        return $this->saldoServicioUSD;
    }

    public function setSaldoServicioUSD(float $saldoServicioUSD): self
    {
        $this->saldoServicioUSD = $saldoServicioUSD;

        return $this;
    }

    public function getSaldoServicioEUR(): ?float
    {
        return $this->saldoServicioEUR;
    }

    public function setSaldoServicioEUR(float $saldoServicioEUR): self
    {
        $this->saldoServicioEUR = $saldoServicioEUR;

        return $this;
    }

    /**
     * @return Collection<int, Producto>
     */
    public function getProductos(): Collection
    {
        return $this->productos;
    }

    public function addProducto(Producto $producto): self
    {
        if (!$this->productos->contains($producto)) {
            $this->productos[] = $producto;
            $producto->setUser($this);
        }

        return $this;
    }

    public function removeProducto(Producto $producto): self
    {
        // set the owning side to null (unless already changed)
        if ($this->productos->removeElement($producto) && $producto->getUser() === $this) {
            $producto->setUser(null);
        }

        return $this;
    }

    /**
     * @return Collection<int, SolicitarPagoRoyalAcumulado>
     */
    public function getSolicitudesPagos(): Collection
    {
        return $this->solicitudesPagos;
    }

    public function addSolicitudesPago(SolicitarPagoRoyalAcumulado $solicitudesPago): self
    {
        if (!$this->solicitudesPagos->contains($solicitudesPago)) {
            $this->solicitudesPagos[] = $solicitudesPago;
            $solicitudesPago->setUser($this);
        }

        return $this;
    }

    public function removeSolicitudesPago(SolicitarPagoRoyalAcumulado $solicitudesPago): self
    {
        // set the owning side to null (unless already changed)
        if ($this->solicitudesPagos->removeElement($solicitudesPago) && $solicitudesPago->getUser() === $this) {
            $solicitudesPago->setUser(null);
        }

        return $this;
    }

    /**
     * @return Collection<int, SolicitarRecogida>
     */
    public function getSolicitudesRecogidas(): Collection
    {
        return $this->solicitudesRecogidas;
    }

    public function addSolicitudesRecogida(SolicitarRecogida $solicitudesRecogida): self
    {
        if (!$this->solicitudesRecogidas->contains($solicitudesRecogida)) {
            $this->solicitudesRecogidas[] = $solicitudesRecogida;
            $solicitudesRecogida->setUser($this);
        }

        return $this;
    }

    public function removeSolicitudesRecogida(SolicitarRecogida $solicitudesRecogida): self
    {
        // set the owning side to null (unless already changed)
        if ($this->solicitudesRecogidas->removeElement($solicitudesRecogida) && $solicitudesRecogida->getUser() === $this) {
            $solicitudesRecogida->setUser(null);
        }

        return $this;
    }

    public function getSaldoLibroEUR(): ?float
    {
        return $this->saldoLibroEUR;
    }

    public function setSaldoLibroEUR(float $saldoLibroEUR): self
    {
        $this->saldoLibroEUR = $saldoLibroEUR;

        return $this;
    }

    /**
     * @return Collection<int, Notificacion>
     */
    public function getNotificaciones(): Collection
    {
        return $this->notificaciones;
    }

    public function addNotificacione(Notificacion $notificacione): self
    {
        if (!$this->notificaciones->contains($notificacione)) {
            $this->notificaciones[] = $notificacione;
            $notificacione->setUser($this);
        }

        return $this;
    }

    public function removeNotificacione(Notificacion $notificacione): self
    {
        // set the owning side to null (unless already changed)
        if ($this->notificaciones->removeElement($notificacione) && $notificacione->getUser() === $this) {
            $notificacione->setUser(null);
        }

        return $this;
    }

    /**
     * @return Collection<int, EstadoFondo>
     */
    public function getMovimientos(): Collection
    {
        return $this->movimientos;
    }

    public function addMovimientos(EstadoFondo $movimientos): self
    {
        if (!$this->movimientos->contains($movimientos)) {
            $this->movimientos[] = $movimientos;
            $movimientos->setUser($this);
        }

        return $this;
    }

    public function removeMovimientos(EstadoFondo $movimientos): self
    {
        // set the owning side to null (unless already changed)
        if ($this->movimientos->removeElement($movimientos) && $movimientos->getUser() === $this) {
            $movimientos->setUser(null);
        }

        return $this;
    }

    public function getDireccionRecogida(): ?DireccionRecogida
    {
        return $this->direccionRecogida;
    }

    public function setDireccionRecogida(?DireccionRecogida $direccionRecogida): self
    {
        // unset the owning side of the relation if necessary
        if ($direccionRecogida === null && $this->direccionRecogida !== null) {
            $this->direccionRecogida->setUser(null);
        }

        // set the owning side of the relation if necessary
        if ($direccionRecogida !== null && $direccionRecogida->getUser() !== $this) {
            $direccionRecogida->setUser($this);
        }

        $this->direccionRecogida = $direccionRecogida;

        return $this;
    }

    /**
     * @return Collection<int, IngresoSaldo>
     */
    public function getIngresos(): Collection
    {
        return $this->ingresos;
    }

    public function addIngreso(IngresoSaldo $ingresoSaldo): self
    {
        if (!$this->ingresos->contains($ingresoSaldo)) {
            $this->ingresos[] = $ingresoSaldo;
            $ingresoSaldo->setUser($this);
        }

        return $this;
    }

    public function removeIngreso(IngresoSaldo $ingresoSaldo): self
    {
        // set the owning side to null (unless already changed)
        if ($this->ingresos->removeElement($ingresoSaldo) && $ingresoSaldo->getUser() === $this) {
            $ingresoSaldo->setUser(null);
        }

        return $this;
    }

    /**
     * @return Collection<int, RetiroSaldo>
     */
    public function getRetiros(): Collection
    {
        return $this->retiros;
    }

    public function addRetiro(RetiroSaldo $retiroSaldo): self
    {
        if (!$this->retiros->contains($retiroSaldo)) {
            $this->retiros[] = $retiroSaldo;
            $retiroSaldo->setUser($this);
        }

        return $this;
    }

    public function removeRetiro(RetiroSaldo $retiroSaldo): self
    {
        // set the owning side to null (unless already changed)
        if ($this->retiros->removeElement($retiroSaldo) && $retiroSaldo->getUser() === $this) {
            $retiroSaldo->setUser(null);
        }

        return $this;
    }

    /**
     * @return Collection<int, Bizum>
     */
    public function getBizums(): Collection
    {
        return $this->bizums;
    }

    public function addBizum(Bizum $bizum): self
    {
        if (!$this->bizums->contains($bizum)) {
            $this->bizums[] = $bizum;
            $bizum->setUser($this);
        }

        return $this;
    }

    public function removeBizum(Bizum $bizum): self
    {
        // set the owning side to null (unless already changed)
        if ($this->bizums->removeElement($bizum) && $bizum->getUser() === $this) {
            $bizum->setUser(null);
        }

        return $this;
    }

    /**
     * @return Collection<int, TransferenciaBancaria>
     */
    public function getTransferenciasBancarias(): Collection
    {
        return $this->transferenciasbancarias;
    }

    public function addTransferenciaBancaria(TransferenciaBancaria $transferenciaBancaria): self
    {
        if (!$this->transferenciasbancarias->contains($transferenciaBancaria)) {
            $this->transferenciasbancarias[] = $transferenciaBancaria;
            $transferenciaBancaria->setUser($this);
        }

        return $this;
    }

    public function removeTransferenciaBancaria(TransferenciaBancaria $transferenciaBancaria): self
    {
        // set the owning side to null (unless already changed)
        if ($this->transferenciasbancarias->removeElement($transferenciaBancaria) && $transferenciaBancaria->getUser() === $this) {
            $transferenciaBancaria->setUser(null);
        }

        return $this;
    }

    /**
     * @return Collection<int, Paypal>
     */
    public function getPaypals(): Collection
    {
        return $this->paypals;
    }

    public function addPaypal(Paypal $paypal): self
    {
        if (!$this->paypals->contains($paypal)) {
            $this->paypals[] = $paypal;
            $paypal->setUser($this);
        }

        return $this;
    }

    public function removePaypal(Paypal $paypal): self
    {
        // set the owning side to null (unless already changed)
        if ($this->paypals->removeElement($paypal) && $paypal->getUser() === $this) {
            $paypal->setUser(null);
        }

        return $this;
    }

    /**
     * @return Collection<int, Westerunion>
     */
    public function getWesterunions(): Collection
    {
        return $this->westerunions;
    }

    public function addWesterunion(Westerunion $westerunion): self
    {
        if (!$this->westerunions->contains($westerunion)) {
            $this->westerunions[] = $westerunion;
            $westerunion->setUser($this);
        }

        return $this;
    }

    public function removeWesterunion(Westerunion $westerunion): self
    {
        // set the owning side to null (unless already changed)
        if ($this->westerunions->removeElement($westerunion) && $westerunion->getUser() === $this) {
            $westerunion->setUser(null);
        }

        return $this;
    }

    /**
     * @return float|int
     */
    public function getSaldoInicialGeneralUSD(): float|int
    {
        return $this->saldoInicialGeneralUSD;
    }

    /**
     * @param float|int $saldoInicialGeneralUSD
     */
    public function setSaldoInicialGeneralUSD(float|int $saldoInicialGeneralUSD): void
    {
        $this->saldoInicialGeneralUSD = $saldoInicialGeneralUSD;
    }

    /**
     * @return float|int
     */
    public function getSaldoInicialGeneralEUR(): float|int
    {
        return $this->saldoInicialGeneralEUR;
    }

    /**
     * @param float|int $saldoInicialGeneralEUR
     */
    public function setSaldoInicialGeneralEUR(float|int $saldoInicialGeneralEUR): void
    {
        $this->saldoInicialGeneralEUR = $saldoInicialGeneralEUR;
    }

    /**
     * @return float|int
     */
    public function getSaldoInicialLibroUSD(): float|int
    {
        return $this->saldoInicialLibroUSD;
    }

    /**
     * @param float|int $saldoInicialLibroUSD
     */
    public function setSaldoInicialLibroUSD(float|int $saldoInicialLibroUSD): void
    {
        $this->saldoInicialLibroUSD = $saldoInicialLibroUSD;
    }

    /**
     * @return float|int
     */
    public function getSaldoInicialServicioUSD(): float|int
    {
        return $this->saldoInicialServicioUSD;
    }

    /**
     * @param float|int $saldoInicialServicioUSD
     */
    public function setSaldoInicialServicioUSD(float|int $saldoInicialServicioUSD): void
    {
        $this->saldoInicialServicioUSD = $saldoInicialServicioUSD;
    }

    /**
     * @return float|int
     */
    public function getSaldoInicialServicioEUR(): float|int
    {
        return $this->saldoInicialServicioEUR;
    }

    /**
     * @param float|int $saldoInicialServicioEUR
     */
    public function setSaldoInicialServicioEUR(float|int $saldoInicialServicioEUR): void
    {
        $this->saldoInicialServicioEUR = $saldoInicialServicioEUR;
    }

    /**
     * @return float|int
     */
    public function getSaldoInicialLibroEUR(): float|int
    {
        return $this->saldoInicialLibroEUR;
    }

    /**
     * @param float|int $saldoInicialLibroEUR
     */
    public function setSaldoInicialLibroEUR(float|int $saldoInicialLibroEUR): void
    {
        $this->saldoInicialLibroEUR = $saldoInicialLibroEUR;
    }


    /**
     * @return Collection<int, ProductoAmortizacion>
     */
    public function getAmortizaciones(): Collection
    {
        return $this->amortizaciones;
    }

    public function addAmortizacion(ProductoAmortizacion $amortizacion): self
    {
        if (!$this->amortizaciones->contains($amortizacion)) {
            $this->amortizaciones[] = $amortizacion;
            $amortizacion->setUser($this);
        }

        return $this;
    }

    public function removeAmortizacion(ProductoAmortizacion $amortizacion): self
    {
        // set the owning side to null (unless already changed)
        if ($this->amortizaciones->removeElement($amortizacion) && $amortizacion->getUser() === $this) {
            $amortizacion->setUser(null);
        }

        return $this;
    }



}
