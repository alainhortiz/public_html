<?php

namespace App\Entity;

use App\Repository\NotificacionRepository;
use DateTimeInterface;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=NotificacionRepository::class)
 */
class Notificacion
{
    const TIPO_NOTIFICACION = [
        1 => 'Activar usuario',
        2 => 'Producto agotado',
        3 => 'Solicitud de pago',
        4 => 'Pago realizado',
        5 => 'Pago rechazado',
        6 => 'Solicitud de recogida',
        7 => 'Producto asignado',
        8 => 'Servicio asignado',
        9 => 'Solicitud aprobada',
        10 => 'Retiro de saldo',
        11 => 'Solicitud rechazada',
        12 => 'Producto agotado usuario',
        13 => 'Ingreso de saldo'

    ];

    const ESTADO_NOTIFICACION = [
        0 => 'Enviada',
        1 => 'Vista'
    ];

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
     * @ORM\Column(type="integer")
     */
    private ?int $tipo;

    /**
     * @ORM\Column(type="boolean")
     */
    private bool $estado = false;

    /**
     * @ORM\OneToOne(targetEntity=SolicitarRecogida::class, inversedBy="notificacion")
     */
    private ?SolicitarRecogida $solicitudRecogida;

    /**
     * @ORM\OneToOne(targetEntity=SolicitarPagoRoyalAcumulado::class, inversedBy="notificacion")
     */
    private ?SolicitarPagoRoyalAcumulado $solicitudPago;

    /**
     * @ORM\OneToOne(targetEntity=IngresoSaldo::class, inversedBy="notificacion")
     */
    private ?IngresoSaldo $ingresoSaldo;

    /**
     * @ORM\OneToOne(targetEntity=RetiroSaldo::class, inversedBy="notificacion")
     */
    private ?RetiroSaldo $retiroSaldo;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="notificaciones")
     * @ORM\JoinColumn(nullable=true)
     */
    private ?User $user;

    /**
     * @ORM\ManyToOne(targetEntity=Producto::class, inversedBy="notificaciones")
     * @ORM\JoinColumn(nullable=true)
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

    public function getTipo(): ?int
    {
        return $this->tipo;
    }

    public function setTipo(int $tipo): self
    {
        $this->tipo = $tipo;

        return $this;
    }

    public function isEstado(): ?bool
    {
        return $this->estado;
    }

    public function setEstado(bool $estado): self
    {
        $this->estado = $estado;

        return $this;
    }

    public function getSolicitudRecogida(): ?SolicitarRecogida
    {
        return $this->solicitudRecogida;
    }

    public function setSolicitudRecogida(?SolicitarRecogida $solicitudRecogida): self
    {
        $this->solicitudRecogida = $solicitudRecogida;

        return $this;
    }

    public function getSolicitudPago(): ?SolicitarPagoRoyalAcumulado
    {
        return $this->solicitudPago;
    }

    public function setSolicitudPago(SolicitarPagoRoyalAcumulado $solicitudPago): self
    {
        $this->solicitudPago = $solicitudPago;

        return $this;
    }

    public function getIngresoSaldo(): ?IngresoSaldo
    {
        return $this->ingresoSaldo;
    }

    public function setIngresoSaldo(IngresoSaldo $ingresoSaldo): self
    {
        $this->ingresoSaldo = $ingresoSaldo;

        return $this;
    }

    public function getRetiroSaldo(): ?RetiroSaldo
    {
        return $this->retiroSaldo;
    }

    public function setRetiroSaldo(RetiroSaldo $retiroSaldo): self
    {
        $this->retiroSaldo = $retiroSaldo;

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

    public function getProducto(): ?Producto
    {
        return $this->producto;
    }

    public function setProducto(?Producto $producto): self
    {
        $this->producto = $producto;

        return $this;
    }

}
