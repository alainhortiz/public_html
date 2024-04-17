<?php

namespace App\Entity;

use App\Repository\WesterunionRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use JetBrains\PhpStorm\Pure;

/**
 * @ORM\Entity(repositoryClass=WesterunionRepository::class)
 */
class Westerunion
{
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
     * @ORM\Column(type="string", length=255, nullable=false)
     */
    private ?string $primerApellido;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private ?string $segundoApellido;

    /**
     * @ORM\Column(type="string", length=255, nullable=false)
     */
    private ?string $email;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private ?string $ciudad;

    /**
     * @ORM\Column(type="string", length=255, nullable=false)
     */
    private ?string $numeromovil;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="westerunions")
     * @ORM\JoinColumn(nullable=true)
     */
    private ?User $user;

    /**
     * @ORM\OneToMany(targetEntity=SolicitarPagoRoyalAcumulado::class, mappedBy="solicitudesPago")
     */
    private $solicitudesPago;

    #[Pure] public function __construct()
    {
        $this->solicitudesPago = new ArrayCollection();
    }

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int|null $id
     */
    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string|null
     */
    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    /**
     * @param string|null $nombre
     */
    public function setNombre(?string $nombre): void
    {
        $this->nombre = $nombre;
    }

    /**
     * @return string|null
     */
    public function getPrimerApellido(): ?string
    {
        return $this->primerApellido;
    }

    /**
     * @param string|null $primerApellido
     */
    public function setPrimerApellido(?string $primerApellido): void
    {
        $this->primerApellido = $primerApellido;
    }

    /**
     * @return string|null
     */
    public function getSegundoApellido(): ?string
    {
        return $this->segundoApellido;
    }

    /**
     * @param string|null $segundoApellido
     */
    public function setSegundoApellido(?string $segundoApellido): void
    {
        $this->segundoApellido = $segundoApellido;
    }

    /**
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * @param string|null $email
     */
    public function setEmail(?string $email): void
    {
        $this->email = $email;
    }

    /**
     * @return string|null
     */
    public function getCiudad(): ?string
    {
        return $this->ciudad;
    }

    /**
     * @param string|null $ciudad
     */
    public function setCiudad(?string $ciudad): void
    {
        $this->ciudad = $ciudad;
    }

    /**
     * @return string|null
     */
    public function getNumeromovil(): ?string
    {
        return $this->numeromovil;
    }

    /**
     * @param string|null $numeromovil
     */
    public function setNumeromovil(?string $numeromovil): void
    {
        $this->numeromovil = $numeromovil;
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
     * @return Collection<int, SolicitarPagoRoyalAcumulado>
     */
    public function getSolicitudesPago(): Collection
    {
        return $this->solicitudesPago;
    }

    public function addSolicitudesPago(SolicitarPagoRoyalAcumulado $solicitarPagoRoyalAcumulado): self
    {
        if (!$this->solicitudesPago->contains($solicitarPagoRoyalAcumulado)) {
            $this->solicitudesPago[] = $solicitarPagoRoyalAcumulado;
            $solicitarPagoRoyalAcumulado->setWesterunion($this);
        }

        return $this;
    }

    public function removeSolicitudesPago(SolicitarPagoRoyalAcumulado $solicitarPagoRoyalAcumulado): self
    {
        // set the owning side to null (unless already changed)
        if ($this->solicitudesPago->removeElement($solicitarPagoRoyalAcumulado) && $solicitarPagoRoyalAcumulado->getWesterunion() === $this) {
            $solicitarPagoRoyalAcumulado->setWesterunion(null);
        }

        return $this;
    }
}
