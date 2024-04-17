<?php

namespace App\Entity;

use App\Repository\ProductoRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use JetBrains\PhpStorm\Pure;

/**
 * @ORM\Entity(repositoryClass=ProductoRepository::class)
 */
class Producto
{
    const TIPO_PRODUCTO =  [
        'General' => 1,
        'Libro' => 2,
        'Servicio' =>  3
    ];

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private ?int $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=false)
     */
    private ?string $nombre;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private ?string $imagen;

    /**
     * @ORM\Column(type="decimal", precision=18, scale=2, nullable=false)
     */
    private ?float $beneficioxventa;

    /**
     * @ORM\Column(type="string", nullable=false)
     */
    private ?string $tipodemoneda;

    /**
     * @ORM\Column(type="string", length=200, nullable=true)
     */
    private ?string $idd;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $stock;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private bool $isActive = true;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="productos")
     */
    private ?User $user;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $stockAdvertencia;

    /**
     * @ORM\Column(type="integer", nullable=false)
     */
    private int $tipoProducto = 1;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private ?string $conceptoServicio;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private ?string $descripcionServicio;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private ?string $documentoServicio;

    /**
     * @ORM\OneToMany(targetEntity=VentaProducto::class, mappedBy="producto", orphanRemoval=true)
     */
    private $ventas;

    /**
     * @ORM\OneToMany(targetEntity=VentaCancelada::class, mappedBy="producto", orphanRemoval=true)
     */
    private $ventasCanceladas;

    /**
     * @ORM\OneToMany(targetEntity=Notificacion::class, mappedBy="producto", orphanRemoval=true)
     */
    private $notificaciones;

    /**
     * @ORM\OneToMany(targetEntity=ProductoAmortizacion::class, mappedBy="producto", orphanRemoval=true)
     */
    private $amortizaciones;

    /**
     * @ORM\OneToMany(targetEntity=PackProducto::class, mappedBy="producto", orphanRemoval=true)
     */
    private $packs;

    #[Pure] public function __construct()
    {
        $this->ventas = new ArrayCollection();
        $this->ventasCanceladas = new ArrayCollection();
        $this->notificaciones = new ArrayCollection();
        $this->amortizaciones = new ArrayCollection();
        $this->packs = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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

    public function getImagen(): ?string
    {
        return $this->imagen;
    }

    public function setImagen(?string $imagen): self
    {
        $this->imagen = $imagen;

        return $this;
    }

    public function getBeneficioxventa(): ?string
    {
        return $this->beneficioxventa;
    }

    public function setBeneficioxventa(?string $beneficioxventa): self
    {
        $this->beneficioxventa = $beneficioxventa;

        return $this;
    }

    public function getTipodemoneda(): ?string
    {
        return $this->tipodemoneda;
    }

    public function setTipodemoneda(?string $tipodemoneda): self
    {
        $this->tipodemoneda = $tipodemoneda;

        return $this;
    }

    public function getIdd(): ?string
    {
        return $this->idd;
    }

    public function setIdd(?string $idd): self
    {
        $this->idd = $idd;

        return $this;
    }

    public function getStock(): ?int
    {
        return $this->stock;
    }

    public function setStock(?int $stock): self
    {
        $this->stock = $stock;

        return $this;
    }

    public function __toString()
    {
        return $this->nombre;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getStockAdvertencia(): ?int
    {
        return $this->stockAdvertencia;
    }

    public function setStockAdvertencia(int $stockAdvertencia): self
    {
        $this->stockAdvertencia = $stockAdvertencia;

        return $this;
    }

    public function getTipoProducto(): ?int
    {
        return $this->tipoProducto;
    }

    public function setTipoProducto(int $tipoProducto): self
    {
        $this->tipoProducto = $tipoProducto;

        return $this;
    }

    public function getConceptoServicio(): ?string
    {
        return $this->conceptoServicio;
    }

    public function setConceptoServicio(?string $conceptoServicio): self
    {
        $this->conceptoServicio = $conceptoServicio;

        return $this;
    }

    public function getDescripcionServicio(): ?string
    {
        return $this->descripcionServicio;
    }

    public function setDescripcionServicio(?string $descripcionServicio): self
    {
        $this->descripcionServicio = $descripcionServicio;

        return $this;
    }

    public function getDocumentoServicio(): ?string
    {
        return $this->documentoServicio;
    }

    public function setDocumentoServicio(?string $documentoServicio): self
    {
        $this->documentoServicio = $documentoServicio;

        return $this;
    }

    /**
     * @return Collection<int, VentaProducto>
     */
    public function getVentas(): Collection
    {
        return $this->ventas;
    }

    public function addVenta(VentaProducto $venta): self
    {
        if (!$this->ventas->contains($venta)) {
            $this->ventas[] = $venta;
            $venta->setProducto($this);
        }

        return $this;
    }

    public function removeVenta(VentaProducto $venta): self
    {
        // set the owning side to null (unless already changed)
        if ($this->ventas->removeElement($venta) && $venta->getProducto() === $this) {
            $venta->setProducto(null);
        }

        return $this;
    }

    /**
     * @return Collection<int, VentaCancelada>
     */
    public function getVentasCanceladas(): Collection
    {
        return $this->ventasCanceladas;
    }

    public function addVentaCancelada(VentaCancelada $ventaCancelada): self
    {
        if (!$this->ventasCanceladas->contains($ventaCancelada)) {
            $this->ventasCanceladas[] = $ventaCancelada;
            $ventaCancelada->setProducto($this);
        }

        return $this;
    }

    public function removeVentaCancelada(VentaCancelada $ventaCancelada): self
    {
        // set the owning side to null (unless already changed)
        if ($this->ventasCanceladas->removeElement($ventaCancelada) && $ventaCancelada->getProducto() === $this) {
            $ventaCancelada->setProducto(null);
        }

        return $this;
    }

    /**
     * @return Collection<int, Notificacion>
     */
    public function getNotificaciones(): Collection
    {
        return $this->notificaciones;
    }

    public function addNotificaciones(Notificacion $notificaciones): self
    {
        if (!$this->notificaciones->contains($notificaciones)) {
            $this->notificaciones[] = $notificaciones;
            $notificaciones->setProducto($this);
        }

        return $this;
    }

    public function removeNotificaciones(Notificacion $notificaciones): self
    {
        // set the owning side to null (unless already changed)
        if ($this->notificaciones->removeElement($notificaciones) && $notificaciones->getProducto() === $this) {
            $notificaciones->setProducto(null);
        }

        return $this;
    }

    /**
     * @return Collection<int, ProductoAmortizacion>
     */
    public function getAmortizaciones(): Collection
    {
        return $this->amortizaciones;
    }

    public function addAmortizaciones(ProductoAmortizacion $amortizaciones): self
    {
        if (!$this->amortizaciones->contains($amortizaciones)) {
            $this->amortizaciones[] = $amortizaciones;
            $amortizaciones->setProducto($this);
        }

        return $this;
    }

    public function removeAmortizaciones(ProductoAmortizacion $amortizaciones): self
    {
        // set the owning side to null (unless already changed)
        if ($this->amortizaciones->removeElement($amortizaciones) && $amortizaciones->getProducto() === $this) {
            $amortizaciones->setProducto(null);
        }

        return $this;
    }

    #[Pure] public function cantidadVentas(): int
    {
        return count($this->ventas);
    }

    public function getIsActive()
    {
        return $this->isActive;
    }

    public function setIsActive($isActive): void
    {
        $this->isActive = $isActive;
    }

    /**
     * @return Collection<int, PackProducto>
     */
    public function getPacks(): Collection
    {
        return $this->packs;
    }

    public function addPacks(PackProducto $packs): self
    {
        if (!$this->packs->contains($packs)) {
            $this->packs[] = $packs;
            $packs->setProducto($this);
        }

        return $this;
    }

    public function removePacks(PackProducto $packs): self
    {
        // set the owning side to null (unless already changed)
        if ($this->packs->removeElement($packs) && $packs->getProducto() === $this) {
            $packs->setProducto(null);
        }

        return $this;
    }

}
