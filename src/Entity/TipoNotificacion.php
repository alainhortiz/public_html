<?php

namespace App\Entity;

use App\Repository\TipoNotificacionRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TipoNotificacionRepository::class)
 */
class TipoNotificacion
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private ?int $id;

    /**
     * @ORM\Column(type="integer")
     */
    private ?int $codigo;

    /**
     * @ORM\Column(type="string", length=100, nullable=false)
     */
    private ?string $nombre;

    /**
     * @ORM\Column(type="string", length=200, nullable=true)
     */
    private ?string $mensaje;

    /**
     * @ORM\Column(type="boolean")
     */
    private bool $correo = false;


    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return int|null
     */
    public function getCodigo(): ?int
    {
        return $this->codigo;
    }

    /**
     * @param int|null $codigo
     */
    public function setCodigo(?int $codigo): void
    {
        $this->codigo = $codigo;
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
    public function getMensaje(): ?string
    {
        return $this->mensaje;
    }

    /**
     * @param string|null $mensaje
     */
    public function setMensaje(?string $mensaje): void
    {
        $this->mensaje = $mensaje;
    }

    /**
     * @return bool
     */
    public function isCorreo(): bool
    {
        return $this->correo;
    }

    /**
     * @param bool $correo
     */
    public function setCorreo(bool $correo): void
    {
        $this->correo = $correo;
    }

}
