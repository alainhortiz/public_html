<?php

namespace App\Entity;

use App\Repository\DireccionRecogidaRepository;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity(repositoryClass=DireccionRecogidaRepository::class)
 */
class DireccionRecogida
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
     * @ORM\Column(type="string", length=180, nullable=true)
     */
    private ?string $telefono;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private ?string $direccion;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private ?string $poblacion;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private ?string $provincia;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private ?string $pais;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private ?string $codigoPostal;

    /**
     * @ORM\OneToOne(targetEntity=User::class, inversedBy="direccionRecogida")
     */
    private ?User $user;

    public function getId(): ?int
    {
        return $this->id;
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
    public function getTelefono(): ?string
    {
        return $this->telefono;
    }

    /**
     * @param string|null $telefono
     */
    public function setTelefono(?string $telefono): void
    {
        $this->telefono = $telefono;
    }

    /**
     * @return string|null
     */
    public function getDireccion(): ?string
    {
        return $this->direccion;
    }

    /**
     * @param string|null $direccion
     */
    public function setDireccion(?string $direccion): void
    {
        $this->direccion = $direccion;
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
     * @return string|null
     */
    public function getPoblacion(): ?string
    {
        return $this->poblacion;
    }

    /**
     * @param string|null $poblacion
     */
    public function setPoblacion(?string $poblacion): void
    {
        $this->poblacion = $poblacion;
    }

    /**
     * @return string|null
     */
    public function getProvincia(): ?string
    {
        return $this->provincia;
    }

    /**
     * @param string|null $provincia
     */
    public function setProvincia(?string $provincia): void
    {
        $this->provincia = $provincia;
    }

    /**
     * @return string|null
     */
    public function getPais(): ?string
    {
        return $this->pais;
    }

    /**
     * @param string|null $pais
     */
    public function setPais(?string $pais): void
    {
        $this->pais = $pais;
    }

    /**
     * @return string|null
     */
    public function getCodigoPostal(): ?string
    {
        return $this->codigoPostal;
    }

    /**
     * @param string|null $codigoPostal
     */
    public function setCodigoPostal(?string $codigoPostal): void
    {
        $this->codigoPostal = $codigoPostal;
    }

}
