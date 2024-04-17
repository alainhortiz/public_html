<?php

namespace App\Entity;

use App\Repository\TransferenciaBancariaRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use JetBrains\PhpStorm\Pure;

/**
 * @ORM\Entity(repositoryClass=TransferenciaBancariaRepository::class)
 */
class TransferenciaBancaria
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private ?int $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private ?string $numerocuenta;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private ?string $titular;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="transferenciasbancarias")
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

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumerocuenta(): ?string
    {
        return $this->numerocuenta;
    }

    public function setNumerocuenta(?string $numerocuenta): self
    {
        $this->numerocuenta = $numerocuenta;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getTitular(): ?string
    {
        return $this->titular;
    }

    /**
     * @param string|null $titular
     */
    public function setTitular(?string $titular): void
    {
        $this->titular = $titular;
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
            $solicitarPagoRoyalAcumulado->setTransferenciaBancaria($this);
        }

        return $this;
    }

    public function removeSolicitudesPago(SolicitarPagoRoyalAcumulado $solicitarPagoRoyalAcumulado): self
    {
        // set the owning side to null (unless already changed)
        if ($this->solicitudesPago->removeElement($solicitarPagoRoyalAcumulado) && $solicitarPagoRoyalAcumulado->getTransferenciaBancaria() === $this) {
            $solicitarPagoRoyalAcumulado->setTransferenciaBancaria(null);
        }

        return $this;
    }


}
