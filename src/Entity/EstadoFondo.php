<?php

namespace App\Entity;

use App\Repository\EstadoFondoRepository;
use DateTimeInterface;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EstadoFondoRepository::class)
 */
class EstadoFondo
{
    const ACCION = [
        1 => 'Ingreso por concepto de ingreso de royalties',
        2 => 'Retiro por concepto de retiro de royalties',
        3 => 'Ingreso por concepto de amortización del producto',
        4 => 'Ingreso por concepto de beneficio de royalties',
        5 => 'Retiro por concepto de solicitud de pago de royalties',
        6 => 'Ingreso por concepto de cancelación de solicitud de pago de royalties',
        7 => 'Retiro de royalties por concepto de cancelación de venta',
        8 => 'Retiro de saldo de amortización por concepto de cancelación de venta'
    ];

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private ?int $id;

    /**
     * @ORM\Column(type="decimal", precision=18, scale=2)
     */
    private float $saldo = 0;

    /**
     * @ORM\Column(type="integer")
     */
    private ?int $accion;

    /**
     * @ORM\Column(type="string", nullable=false)
     */
    private ?string $tipodemoneda;

    /**
     * @ORM\Column(type="datetime")
     */
    private ?DateTimeInterface $fecha;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="movimientos")
     * @ORM\JoinColumn(nullable=false)
     */
    private ?User $user;

    /**
     * @ORM\ManyToOne(targetEntity=Venta::class, inversedBy="movimientos")
     * @ORM\JoinColumn(nullable=true)
     */
    private ?Venta $venta;

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return float|int
     */
    public function getSaldo(): float|int
    {
        return $this->saldo;
    }

    /**
     * @param float|int $saldo
     */
    public function setSaldo(float|int $saldo): void
    {
        $this->saldo = $saldo;
    }

    /**
     * @return string|null
     */
    public function getTipodemoneda(): ?string
    {
        return $this->tipodemoneda;
    }

    /**
     * @param string|null $tipodemoneda
     */
    public function setTipodemoneda(?string $tipodemoneda): void
    {
        $this->tipodemoneda = $tipodemoneda;
    }



    public function getAccion(): ?int
    {
        return $this->accion;
    }

    public function setAccion(int $accion): self
    {
        $this->accion = $accion;

        return $this;
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

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

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

}
