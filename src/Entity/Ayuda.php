<?php

namespace App\Entity;

use App\Repository\AyudaRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=AyudaRepository::class)
 */
class Ayuda
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private ?int $id;

    /**
     * @ORM\Column(type="string", length=200, nullable=false)
     *
     * @Assert\NotBlank()
     */
    private ?string $titulo;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private ?string $descripcion;

    /**
     * @ORM\Column(type="string", length=255, nullable=false)
     */
    private ?string $url;

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return string|null
     */
    public function getTitulo(): ?string
    {
        return $this->titulo;
    }

    /**
     * @param string|null $titulo
     */
    public function setTitulo(?string $titulo): void
    {
        $this->titulo = $titulo;
    }

    /**
     * @return string|null
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }

    /**
     * @param string|null $url
     */
    public function setUrl(?string $url): void
    {
        $this->url = $url;
    }

    /**
     * @return string|null
     */
    public function getDescripcion(): ?string
    {
        return $this->descripcion;
    }

    /**
     * @param string|null $descripcion
     */
    public function setDescripcion(?string $descripcion): void
    {
        $this->descripcion = $descripcion;
    }


}
