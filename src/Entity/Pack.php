<?php

namespace App\Entity;

use App\Repository\PackRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use JetBrains\PhpStorm\Pure;

/**
 * @ORM\Entity(repositoryClass=PackRepository::class)
 */
class Pack
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
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private ?string $imagen;

    /**
     * @ORM\Column(type="decimal", precision=18, scale=2, nullable=false)
     */
    private ?float $beneficioxventa;

    /**
     * @ORM\Column(type="string", nullable=false)
     */
    private ?string $tipodemoneda;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private bool $isActive = false;

    /**
     * @ORM\OneToMany(targetEntity=PackProducto::class, mappedBy="pack", orphanRemoval=true)
     */
    private $productos;

    /**
     * @ORM\OneToMany(targetEntity=VentaProducto::class, mappedBy="pack", orphanRemoval=true)
     */
    private $ventas;

    #[Pure] public function __construct()
    {
        $this->productos = new ArrayCollection();
        $this->ventas = new ArrayCollection();
    }

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
    public function getImagen(): ?string
    {
        return $this->imagen;
    }

    /**
     * @param string|null $imagen
     */
    public function setImagen(?string $imagen): void
    {
        $this->imagen = $imagen;
    }

    /**
     * @return float|null
     */
    public function getBeneficioxventa(): ?float
    {
        return $this->beneficioxventa;
    }

    /**
     * @param float|null $beneficioxventa
     */
    public function setBeneficioxventa(?float $beneficioxventa): void
    {
        $this->beneficioxventa = $beneficioxventa;
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

    /**
     * @return bool
     */
    public function isActive(): bool
    {
        return $this->isActive;
    }

    /**
     * @param bool $isActive
     */
    public function setIsActive(bool $isActive): void
    {
        $this->isActive = $isActive;
    }

    /**
     * @return Collection<int, PackProducto>
     */
    public function getProductos(): Collection
    {
        return $this->productos;
    }

    public function addProductos(PackProducto $productos): self
    {
        if (!$this->productos->contains($productos)) {
            $this->productos[] = $productos;
            $productos->setPack($this);
        }

        return $this;
    }

    public function removeProductos(PackProducto $productos): self
    {
        // set the owning side to null (unless already changed)
        if ($this->productos->removeElement($productos) && $productos->getPack() === $this) {
            $productos->setPack(null);
        }

        return $this;
    }

    /**
     * @return Collection<int, VentaProducto>
     */
    public function getVentas(): Collection
    {
        return $this->ventas;
    }

    public function addVentas(VentaProducto $ventas): self
    {
        if (!$this->ventas->contains($ventas)) {
            $this->ventas[] = $ventas;
            $ventas->setPack($this);
        }

        return $this;
    }

    public function removeVentas(VentaProducto $ventas): self
    {
        // set the owning side to null (unless already changed)
        if ($this->ventas->removeElement($ventas) && $ventas->getPack() === $this) {
            $ventas->setPack(null);
        }

        return $this;
    }

    #[Pure] public function cantidadVentas(): int
    {
        return count($this->ventas);
    }

}
