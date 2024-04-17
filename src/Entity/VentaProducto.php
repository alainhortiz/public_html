<?php

namespace App\Entity;

use App\Repository\VentaProductoRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=VentaProductoRepository::class)
 */
class VentaProducto
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private ?int $id;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private int $cantidad = 0;

    /**
     * @ORM\Column(type="decimal", precision=18, scale=2)
     */
    private float $royaltie = 0;

    /**
     * @ORM\Column(type="decimal", precision=18, scale=2, nullable=true)
     */
    private float $pagoAmortizacion = 0;

    /**
     * @ORM\ManyToOne(targetEntity=Producto::class, inversedBy="ventas")
     * @ORM\JoinColumn(nullable=false)
     */
    private ?Producto $producto;

    /**
     * @ORM\ManyToOne(targetEntity=ProductoAmortizacion::class, inversedBy="ventas")
     * @ORM\JoinColumn(nullable=true)
     */
    private ?ProductoAmortizacion $amortizacion;

    /**
     * @ORM\ManyToOne(targetEntity=Pack::class, inversedBy="ventas")
     * @ORM\JoinColumn(nullable=true)
     */
    private ?Pack $pack;

    /**
     * @ORM\ManyToOne(targetEntity=Venta::class, inversedBy="ventas")
     * @ORM\JoinColumn(nullable=false)
     */
    private ?Venta $venta;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCantidad(): ?int
    {
        return $this->cantidad;
    }

    public function setCantidad(int $cantidad): self
    {
        $this->cantidad = $cantidad;

        return $this;
    }

    public function getRoyaltie(): ?float
    {
        return $this->royaltie;
    }

    public function setRoyaltie(float $royaltie): self
    {
        $this->royaltie = $royaltie;

        return $this;
    }

    public function getProducto(): ?Producto
    {
        return $this->producto;
    }

    public function setProducto(?Producto $producto): self
    {
        $this->producto = $producto;

        return $this;
    }

    public function getAmortizacion(): ?ProductoAmortizacion
    {
        return $this->amortizacion;
    }

    public function setAmortizacion(?ProductoAmortizacion $amortizacion): self
    {
        $this->amortizacion = $amortizacion;

        return $this;
    }

    public function getPack(): ?Pack
    {
        return $this->pack;
    }

    public function setPack(?Pack $pack): self
    {
        $this->pack = $pack;

        return $this;
    }

    public function getVenta(): ?Venta
    {
        return $this->venta;
    }

    public function setVenta(?Venta $venta): self
    {
        $this->venta = $venta;

        return $this;
    }

    /**
     * @return float|int
     */
    public function getPagoAmortizacion(): float|int
    {
        return $this->pagoAmortizacion;
    }

    /**
     * @param float|int $pagoAmortizacion
     */
    public function setPagoAmortizacion(float|int $pagoAmortizacion): void
    {
        $this->pagoAmortizacion = $pagoAmortizacion;
    }


}
