<?php

namespace App\Entity;

use App\Repository\VentaCanceladaRepository;
use DateTimeInterface;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=VentaCanceladaRepository::class)
 */
class VentaCancelada
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
     * @ORM\Column(type="decimal", precision=18, scale=2)
     */
    private float $royaltie = 0;

    /**
     * @ORM\Column(type="decimal", precision=18, scale=2)
     */
    private float $amortizacion = 0;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private ?string $saldoAfectado;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $cantidad;

    /**
     * @ORM\ManyToOne(targetEntity=Producto::class, inversedBy="ventas")
     * @ORM\JoinColumn(nullable=false)
     */
    private ?Producto $producto;

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

    public function getRoyaltie(): ?float
    {
        return $this->royaltie;
    }

    public function setRoyaltie(float $royaltie): self
    {
        $this->royaltie = $royaltie;

        return $this;
    }

    /**
     * @return float|int
     */
    public function getAmortizacion(): float|int
    {
        return $this->amortizacion;
    }

    /**
     * @param float|int $amortizacion
     */
    public function setAmortizacion(float|int $amortizacion): void
    {
        $this->amortizacion = $amortizacion;
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

    public function getSaldoAfectado(): ?string
    {
        return $this->saldoAfectado;
    }

    public function setSaldoAfectado(string $saldoAfectado): self
    {
        $this->saldoAfectado = $saldoAfectado;

        return $this;
    }

    public function getCantidad(): ?int
    {
        return $this->cantidad;
    }

    public function setCantidad(?int $cantidad): self
    {
        $this->cantidad = $cantidad;

        return $this;
    }
}
