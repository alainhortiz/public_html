<?php

namespace App\Entity;

use App\Repository\SolicitarPagoRoyalAcumuladoRepository;
use DateTimeInterface;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SolicitarPagoRoyalAcumuladoRepository::class)
 */
class SolicitarPagoRoyalAcumulado
{

    public const METODO_PAGO = [
        'Paypal' => 'Paypal',
        'WesterUnion' => 'WesterUnion',
        'Bizum' => 'Bizum',
        'Transferencia Bancaria' => 'Transferencia Bancaria',
        'Efectivo' => 'Efectivo',
        'Voucher' => 'Voucher'
    ];

    const ESTADO_PAGO = [
        'Enviado' => 0,
        'Realizado' => 1,
        'Rechazado' => 2
    ];

    const IVA_GENERAL = 21;
    const IVA_LIBRO = 4;

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private ?int $id;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private ?DateTimeInterface $fecha;

    /**
     * @ORM\Column(type="decimal", precision=18, scale=2, nullable=true)
     */
    private $royaltiespagar = 0;

    /**
     * @ORM\Column(type="integer", nullable=false)
     */
    private $estado = 0;

    /**
     * @ORM\Column(type="string", length=100, nullable=false)
     */
    private ?string $metododepago;

    /**
     * @ORM\ManyToOne(targetEntity=Westerunion::class, inversedBy="solicitudesPago")
     * @ORM\JoinColumn(nullable=true)
     */
    private ?Westerunion $westerunion;

    /**
     * @ORM\ManyToOne(targetEntity=Paypal::class, inversedBy="solicitudesPago")
     * @ORM\JoinColumn(nullable=true)
     */
    private ?Paypal $paypal;

    /**
     * @ORM\ManyToOne(targetEntity=TransferenciaBancaria::class, inversedBy="solicitudesPago")
     * @ORM\JoinColumn(nullable=true)
     */
    private ?TransferenciaBancaria $transferenciaBancaria;

    /**
     * @ORM\ManyToOne(targetEntity=Bizum::class, inversedBy="solicitudesPago")
     * @ORM\JoinColumn(nullable=true)
     */
    private ?Bizum $bizum;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private ?string $motivoRechazo;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="solicitudesPagos")
     * @ORM\JoinColumn(nullable=false)
     */
    private ?User $user;

    /**
     * @ORM\OneToOne(targetEntity=Notificacion::class, mappedBy="solicitudPago", cascade={"persist", "remove"})
     */
    private ?Notificacion $notificacion;

    /**
     * @ORM\Column(type="integer")
     */
    private $tipoPago = 0;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $factura;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $documentoAprobacion;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $info;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFecha(): ?DateTimeInterface
    {
        return $this->fecha;
    }

    public function setFecha(?DateTimeInterface $fecha): self
    {
        $this->fecha = $fecha;

        return $this;
    }

    public function getRoyaltiespagar(): ?float
    {
        return $this->royaltiespagar;
    }

    public function setRoyaltiespagar(?float $royaltiespagar): self
    {
        $this->royaltiespagar = $royaltiespagar;

        return $this;
    }

    public function getEstado(): ?string
    {
        return $this->estado;
    }

    public function setEstado(?string $estado): self
    {
        $this->estado = $estado;

        return $this;
    }

    public function getMetododepago(): ?string
    {
        return $this->metododepago;
    }

    public function setMetododepago(?string $metododepago): self
    {
        $this->metododepago = $metododepago;

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

    public function getNotificacion(): ?Notificacion
    {
        return $this->notificacion;
    }

    public function setNotificacion(Notificacion $notificacion): self
    {
        // set the owning side of the relation if necessary
        if ($notificacion->getSolicitudPago() !== $this) {
            $notificacion->setSolicitudPago($this);
        }

        $this->notificacion = $notificacion;

        return $this;
    }

    public function getTipoPago(): ?int
    {
        return $this->tipoPago;
    }

    public function setTipoPago(int $tipoPago): self
    {
        $this->tipoPago = $tipoPago;

        return $this;
    }

    public function getFactura(): ?string
    {
        return $this->factura;
    }

    public function setFactura(?string $factura): self
    {
        $this->factura = $factura;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getMotivoRechazo(): ?string
    {
        return $this->motivoRechazo;
    }

    /**
     * @param string|null $motivoRechazo
     */
    public function setMotivoRechazo(?string $motivoRechazo): void
    {
        $this->motivoRechazo = $motivoRechazo;
    }

    /**
     * @return Westerunion|null
     */
    public function getWesterunion(): ?Westerunion
    {
        return $this->westerunion;
    }

    /**
     * @param Westerunion|null $westerunion
     */
    public function setWesterunion(?Westerunion $westerunion): void
    {
        $this->westerunion = $westerunion;
    }

    /**
     * @return Paypal|null
     */
    public function getPaypal(): ?Paypal
    {
        return $this->paypal;
    }

    /**
     * @param Paypal|null $paypal
     */
    public function setPaypal(?Paypal $paypal): void
    {
        $this->paypal = $paypal;
    }

    /**
     * @return TransferenciaBancaria|null
     */
    public function getTransferenciaBancaria(): ?TransferenciaBancaria
    {
        return $this->transferenciaBancaria;
    }

    /**
     * @param TransferenciaBancaria|null $transferenciaBancaria
     */
    public function setTransferenciaBancaria(?TransferenciaBancaria $transferenciaBancaria): void
    {
        $this->transferenciaBancaria = $transferenciaBancaria;
    }

    /**
     * @return Bizum|null
     */
    public function getBizum(): ?Bizum
    {
        return $this->bizum;
    }

    /**
     * @param Bizum|null $bizum
     */
    public function setBizum(?Bizum $bizum): void
    {
        $this->bizum = $bizum;
    }

    /**
     * @return mixed
     */
    public function getDocumentoAprobacion()
    {
        return $this->documentoAprobacion;
    }

    /**
     * @param mixed $documentoAprobacion
     */
    public function setDocumentoAprobacion($documentoAprobacion): void
    {
        $this->documentoAprobacion = $documentoAprobacion;
    }

    /**
     * @return mixed
     */
    public function getInfo()
    {
        return $this->info;
    }

    /**
     * @param mixed $info
     */
    public function setInfo($info): void
    {
        $this->info = $info;
    }



}
