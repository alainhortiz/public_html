<?php

namespace App\Entity;

use App\Repository\IngresoSaldoRepository;
use DateTimeInterface;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=IngresoSaldoRepository::class)
 */
class IngresoSaldo
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private ?int $id;

    /**
     * @ORM\Column(type="date", nullable=false)
     */
    private ?DateTimeInterface $fecha;

    /**
     * @ORM\Column(type="string", length=255, nullable=false)
     */
    private ?string $motivo;

    /**
     * @ORM\Column(type="decimal", precision=18, scale=2, nullable=true)
     */
    private float $cantidad = 0;

    /**
     * @ORM\Column(type="integer", nullable=false)
     */
    private int $tipoSaldo = 0;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private ?string $documento;

    /**
     * @ORM\OneToOne(targetEntity=Notificacion::class, mappedBy="ingresoSaldo", cascade={"persist", "remove"})
     */
    private ?Notificacion $notificacion;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="ingresos")
     */
    private ?User $user;

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return DateTimeInterface|null
     */
    public function getFecha(): ?DateTimeInterface
    {
        return $this->fecha;
    }

    /**
     * @param DateTimeInterface|null $fecha
     */
    public function setFecha(?DateTimeInterface $fecha): void
    {
        $this->fecha = $fecha;
    }

    /**
     * @return string|null
     */
    public function getMotivo(): ?string
    {
        return $this->motivo;
    }

    /**
     * @param string|null $motivo
     */
    public function setMotivo(?string $motivo): void
    {
        $this->motivo = $motivo;
    }

    /**
     * @return float
     */
    public function getCantidad(): float
    {
        return $this->cantidad;
    }

    /**
     * @param float $cantidad
     */
    public function setCantidad(float $cantidad): void
    {
        $this->cantidad = $cantidad;
    }

    /**
     * @return int
     */
    public function getTipoSaldo(): int
    {
        return $this->tipoSaldo;
    }

    /**
     * @param int $tipoSaldo
     */
    public function setTipoSaldo(int $tipoSaldo): void
    {
        $this->tipoSaldo = $tipoSaldo;
    }

    public function getDocumento(): ?string
    {
        return $this->documento;
    }

    public function setDocumento(?string $documento): self
    {
        $this->documento = $documento;

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
        if ($notificacion->getIngresoSaldo() !== $this) {
            $notificacion->setIngresoSaldo($this);
        }

        $this->notificacion = $notificacion;

        return $this;
    }
}
