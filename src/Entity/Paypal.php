<?php

namespace App\Entity;

use App\Repository\PaypalRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use JetBrains\PhpStorm\Pure;

/**
 * @ORM\Entity(repositoryClass=PaypalRepository::class)
 */
class Paypal
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private ?int $id;

    /**
     * @ORM\Column(type="string", length=180, nullable=false)
     */
    private ?string $email;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="paypals")
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

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

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
            $solicitarPagoRoyalAcumulado->setPaypal($this);
        }

        return $this;
    }

    public function removeSolicitudesPago(SolicitarPagoRoyalAcumulado $solicitarPagoRoyalAcumulado): self
    {
        // set the owning side to null (unless already changed)
        if ($this->solicitudesPago->removeElement($solicitarPagoRoyalAcumulado) && $solicitarPagoRoyalAcumulado->getPaypal() === $this) {
            $solicitarPagoRoyalAcumulado->setPaypal(null);
        }

        return $this;
    }
}
