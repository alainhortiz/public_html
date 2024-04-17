<?php

namespace App\Entity;

use App\Repository\ProductoAmortizacionRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use JetBrains\PhpStorm\Pure;

/**
 * @ORM\Entity(repositoryClass=ProductoAmortizacionRepository::class)
 */
class ProductoAmortizacion
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private ?int $id;

    /**
     * @ORM\Column(type="decimal", precision=18, scale=2, nullable=false)
     */
    private float $costoProduccion = 0;

    /**
     * @ORM\Column(type="decimal", precision=18, scale=2, nullable=false)
     */
    private float $precioVenta = 0;

    /**
     * @ORM\Column(type="decimal", precision=18, scale=2, nullable=false)
     */
    private float $saldoRestante = 0;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private bool $isActive = true;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private bool $isAdministrador = false;

    /**
     * @ORM\ManyToOne(targetEntity=Producto::class, inversedBy="amortizaciones")
     * @ORM\JoinColumn(nullable=true)
     */
    private ?Producto $producto;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="amortizaciones")
     * @ORM\JoinColumn(nullable=true)
     */
    private ?User $user;

    /**
     * @ORM\OneToMany(targetEntity=VentaProducto::class, mappedBy="amortizacion", orphanRemoval=true)
     */
    private $ventas;

    #[Pure] public function __construct()
    {
        $this->ventas = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return float|int
     */
    public function getCostoProduccion(): float|int
    {
        return $this->costoProduccion;
    }

    /**
     * @param float|int $costoProduccion
     */
    public function setCostoProduccion(float|int $costoProduccion): void
    {
        $this->costoProduccion = $costoProduccion;
    }

    /**
     * @return float|int
     */
    public function getPrecioVenta(): float|int
    {
        return $this->precioVenta;
    }

    /**
     * @param float|int $precioVenta
     */
    public function setPrecioVenta(float|int $precioVenta): void
    {
        $this->precioVenta = $precioVenta;
    }

    /**
     * @return float|int
     */
    public function getSaldoRestante(): float|int
    {
        return $this->saldoRestante;
    }

    /**
     * @param float|int $saldoRestante
     */
    public function setSaldoRestante(float|int $saldoRestante): void
    {
        $this->saldoRestante = $saldoRestante;
    }

    /**
     * @return bool
     */
    public function isActive(): bool
    {
        return $this->isActive;
    }

    /**
     * @param bool $isActive
     */
    public function setIsActive(bool $isActive): void
    {
        $this->isActive = $isActive;
    }

    /**
     * @return bool
     */
    public function isAdministrador(): bool
    {
        return $this->isAdministrador;
    }

    /**
     * @param bool $isAdministrador
     */
    public function setIsAdministrador(bool $isAdministrador): void
    {
        $this->isAdministrador = $isAdministrador;
    }

    /**
     * @return Producto|null
     */
    public function getProducto(): ?Producto
    {
        return $this->producto;
    }

    /**
     * @param Producto|null $producto
     */
    public function setProducto(?Producto $producto): void
    {
        $this->producto = $producto;
    }

    /**
     * @return User|null
     */
    public function getUser(): ?User
    {
        return $this->user;
    }

    /**
     * @param User|null $user
     */
    public function setUser(?User $user): void
    {
        $this->user = $user;
    }

    /**
     * @return Collection<int, VentaProducto>
     */
    public function getVentas(): Collection
    {
        return $this->ventas;
    }

    public function addVentas(VentaProducto $ventas): self
    {
        if (!$this->ventas->contains($ventas)) {
            $this->ventas[] = $ventas;
            $ventas->setAmortizacion($this);
        }

        return $this;
    }

    public function removeVentas(VentaProducto $ventas): self
    {
        // set the owning side to null (unless already changed)
        if ($this->ventas->removeElement($ventas) && $ventas->getAmortizacion() === $this) {
            $ventas->setAmortizacion(null);
        }

        return $this;
    }

}
