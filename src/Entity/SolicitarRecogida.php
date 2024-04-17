<?php

namespace App\Entity;

use App\Repository\SolicitarRecogidaRepository;
use DateTimeInterface;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SolicitarRecogidaRepository::class)
 */
class SolicitarRecogida
{
    const ESTADO_SOLICITUD = [
        'Sin aprobar' => 'Sin aprobar',
        'Aprobada' => 'Aprobada',
        'Rechazada' => 'Rechazada'
    ];

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private ?int $id;

    /**
     * @ORM\Column(type="date", nullable=false)
     */
    private ?DateTimeInterface $fechaSolicitud;

    /**
     * @ORM\Column(type="string", length=255, nullable=false)
     */
    private $indicadorSolicitud;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private ?DateTimeInterface $fechaRecogida;

    /**
     * @ORM\Column(type="time", nullable=true)
     */
    private ?DateTimeInterface $horaRecogida;

    /**
     * @ORM\Column(type="time", nullable=true)
     */
    private ?DateTimeInterface $horaFinRecogida;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $linkRecogida;

    /**
     * @ORM\Column(type="string", length=255, nullable=false)
     */
    private ?string $nombreContactoRecogida;

    /**
     * @ORM\Column(type="string", length=180, nullable=true)
     */
    private ?string $telefonoContactoRecogida;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private ?string $direccionContactoRecogida;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private ?string $poblacionContactoRecogida;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private ?string $provinciaContactoRecogida;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private ?string $paisContactoRecogida;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private ?string $codigoPostalContactoRecogida;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private ?string $motivoRechazo;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private ?string $observacionRecogida;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private ?string $estado;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="solicitudesRecogidas")
     * @ORM\JoinColumn(nullable=false)
     */
    private ?User $user;

    /**
     * @ORM\OneToOne(targetEntity=Notificacion::class, mappedBy="solicitudRecogida", cascade={"persist", "remove"})
     */
    private ?Notificacion $notificacion;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFechaSolicitud(): ?DateTimeInterface
    {
        return $this->fechaSolicitud;
    }

    public function setFechaSolicitud(DateTimeInterface $fechaSolictud): self
    {
        $this->fechaSolicitud = $fechaSolictud;

        return $this;
    }

    public function getFechaRecogida(): ?DateTimeInterface
    {
        return $this->fechaRecogida;
    }

    public function setFechaRecogida(DateTimeInterface $fechaRecogida): self
    {
        $this->fechaRecogida = $fechaRecogida;

        return $this;
    }

    public function getHoraRecogida(): ?DateTimeInterface
    {
        return $this->horaRecogida;
    }

    public function setHora(?DateTimeInterface $horaRecogida): self
    {
        $this->horaRecogida = $horaRecogida;

        return $this;
    }

    public function getHoraFinRecogida(): ?DateTimeInterface
    {
        return $this->horaFinRecogida;
    }

    public function setHoraFinRecogida(?DateTimeInterface $horaFinRecogida): self
    {
        $this->horaFinRecogida = $horaFinRecogida;

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

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getIndicadorSolicitud()
    {
        return $this->indicadorSolicitud;
    }

    /**
     * @param mixed $indicadorSolicitud
     */
    public function setIndicadorSolicitud($indicadorSolicitud): void
    {
        $this->indicadorSolicitud = $indicadorSolicitud;
    }

    /**
     * @return mixed
     */
    public function getLinkRecogida()
    {
        return $this->linkRecogida;
    }

    /**
     * @param mixed $linkRecogida
     */
    public function setLinkRecogida($linkRecogida): void
    {
        $this->linkRecogida = $linkRecogida;
    }

    /**
     * @return string|null
     */
    public function getNombreContactoRecogida(): ?string
    {
        return $this->nombreContactoRecogida;
    }

    /**
     * @param string|null $nombreContactoRecogida
     */
    public function setNombreContactoRecogida(?string $nombreContactoRecogida): void
    {
        $this->nombreContactoRecogida = $nombreContactoRecogida;
    }

    /**
     * @return string|null
     */
    public function getTelefonoContactoRecogida(): ?string
    {
        return $this->telefonoContactoRecogida;
    }

    /**
     * @param string|null $telefonoContactoRecogida
     */
    public function setTelefonoContactoRecogida(?string $telefonoContactoRecogida): void
    {
        $this->telefonoContactoRecogida = $telefonoContactoRecogida;
    }

    /**
     * @return string|null
     */
    public function getDireccionContactoRecogida(): ?string
    {
        return $this->direccionContactoRecogida;
    }

    /**
     * @param string|null $direccionContactoRecogida
     */
    public function setDireccionContactoRecogida(?string $direccionContactoRecogida): void
    {
        $this->direccionContactoRecogida = $direccionContactoRecogida;
    }



    /**
     * @return string|null
     */
    public function getObservacionRecogida(): ?string
    {
        return $this->observacionRecogida;
    }

    /**
     * @param string|null $observacionRecogida
     */
    public function setObservacionRecogida(?string $observacionRecogida): void
    {
        $this->observacionRecogida = $observacionRecogida;
    }

    public function getNotificacion(): ?Notificacion
    {
        return $this->notificacion;
    }

    public function setNotificacion(?Notificacion $notificacion): self
    {
        // unset the owning side of the relation if necessary
        if ($notificacion === null && $this->notificacion !== null) {
            $this->notificacion->setSolicitudRecogida(null);
        }

        // set the owning side of the relation if necessary
        if ($notificacion !== null && $notificacion->getSolicitudRecogida() !== $this) {
            $notificacion->setSolicitudRecogida($this);
        }

        $this->notificacion = $notificacion;

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
     * @return string|null
     */
    public function getPoblacionContactoRecogida(): ?string
    {
        return $this->poblacionContactoRecogida;
    }

    /**
     * @param string|null $poblacionContactoRecogida
     */
    public function setPoblacionContactoRecogida(?string $poblacionContactoRecogida): void
    {
        $this->poblacionContactoRecogida = $poblacionContactoRecogida;
    }

    /**
     * @return string|null
     */
    public function getProvinciaContactoRecogida(): ?string
    {
        return $this->provinciaContactoRecogida;
    }

    /**
     * @param string|null $provinciaContactoRecogida
     */
    public function setProvinciaContactoRecogida(?string $provinciaContactoRecogida): void
    {
        $this->provinciaContactoRecogida = $provinciaContactoRecogida;
    }

    /**
     * @return string|null
     */
    public function getPaisContactoRecogida(): ?string
    {
        return $this->paisContactoRecogida;
    }

    /**
     * @param string|null $paisContactoRecogida
     */
    public function setPaisContactoRecogida(?string $paisContactoRecogida): void
    {
        $this->paisContactoRecogida = $paisContactoRecogida;
    }

    /**
     * @return string|null
     */
    public function getCodigoPostalContactoRecogida(): ?string
    {
        return $this->codigoPostalContactoRecogida;
    }

    /**
     * @param string|null $codigoPostalContactoRecogida
     */
    public function setCodigoPostalContactoRecogida(?string $codigoPostalContactoRecogida): void
    {
        $this->codigoPostalContactoRecogida = $codigoPostalContactoRecogida;
    }

}
