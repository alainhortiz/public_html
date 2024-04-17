<?php

namespace App\Entity;

use App\Repository\VentaRepository;
use DateTimeInterface;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use JetBrains\PhpStorm\Pure;

/**
 * @ORM\Entity(repositoryClass=VentaRepository::class)
 */
class Venta
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private ?int $id;

    /**
     * @ORM\Column(type="datetime")
     */
    private ?DateTimeInterface $fecha;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private ?string $codigo;

    /**
     * @ORM\OneToMany(targetEntity=VentaProducto::class, mappedBy="venta", orphanRemoval=true)
     */
    private $ventas;

    /**
     * @ORM\OneToMany(targetEntity=EstadoFondo::class, mappedBy="venta", orphanRemoval=false)
     */
    private $movimientos;

    #[Pure] public function __construct()
    {
        $this->ventas = new ArrayCollection();
        $this->movimientos = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFecha(): ?DateTimeInterface
    {
        return $this->fecha;
    }

    public function setFecha(DateTimeInterface $fecha): self
    {
        $this->fecha = $fecha;

        return $this;
    }

    public function getCodigo(): ?string
    {
        return $this->codigo;
    }

    public function setCodigo(string $codigo): self
    {
        $this->codigo = $codigo;

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
            $venta->setVenta($this);
        }

        return $this;
    }

    public function removeVenta(VentaProducto $venta): self
    {
        // set the owning side to null (unless already changed)
        if ($this->ventas->removeElement($venta) && $venta->getVenta() === $this) {
            $venta->setVenta(null);
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
            $movimientos->setVenta($this);
        }

        return $this;
    }

    public function removeMovimientos(EstadoFondo $movimientos): self
    {
        // set the owning side to null (unless already changed)
        if ($this->movimientos->removeElement($movimientos) && $movimientos->getVenta() === $this) {
            $movimientos->setVenta(null);
        }

        return $this;
    }
}
