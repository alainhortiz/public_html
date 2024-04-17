<?php

namespace App\Entity;

use App\Repository\PackProductoRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use JetBrains\PhpStorm\Pure;

/**
 * @ORM\Entity(repositoryClass=PackProductoRepository::class)
 */
class PackProducto
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private ?int $id;

    /**
     * @ORM\Column(type="decimal", precision=18, scale=2, nullable=false)
     */
    private ?float $beneficioxventa;

    /**
     * @ORM\ManyToOne(targetEntity=Pack::class, inversedBy="productos")
     * @ORM\JoinColumn(nullable=false)
     */
    private ?Pack $pack;

    /**
     * @ORM\ManyToOne(targetEntity=Producto::class, inversedBy="packs")
     * @ORM\JoinColumn(nullable=false)
     */
    private ?Producto $producto;


    public function getId(): ?int
    {
        return $this->id;
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

    public function getPack(): ?Pack
    {
        return $this->pack;
    }

    public function setPack(?Pack $pack): self
    {
        $this->pack = $pack;

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
