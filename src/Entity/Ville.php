<?php

namespace App\Entity;

use App\Repository\VilleRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=VilleRepository::class)
 */
class Ville
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $nomVille;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $codePostal;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $numeroInsee;

    /**
     * @ORM\OneToMany(targetEntity=Route::class, mappedBy="ville")
     */
    private $ville;

    /**
     * @ORM\ManyToOne(targetEntity=Departement::class, inversedBy="departement")
     * @ORM\JoinColumn(nullable=false)
     */
    private $departement;

    public function __construct()
    {
        $this->ville = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomVille(): ?string
    {
        return $this->nomVille;
    }

    public function setNomVille(?string $nomVille): self
    {
        $this->nomVille = $nomVille;

        return $this;
    }

    public function getCodePostal(): ?int
    {
        return $this->codePostal;
    }

    public function setCodePostal(?int $codePostal): self
    {
        $this->codePostal = $codePostal;

        return $this;
    }

    public function getNumeroInsee(): ?string
    {
        return $this->numeroInsee;
    }

    public function setNumeroInsee(?string $numeroInsee): self
    {
        $this->numeroInsee = $numeroInsee;

        return $this;
    }

    /**
     * @return Collection|Route[]
     */
    public function getVille(): Collection
    {
        return $this->ville;
    }

    public function addVille(Route $ville): self
    {
        if (!$this->ville->contains($ville)) {
            $this->ville[] = $ville;
            $ville->setVille($this);
        }

        return $this;
    }

    public function removeVille(Route $ville): self
    {
        if ($this->ville->removeElement($ville)) {
            // set the owning side to null (unless already changed)
            if ($ville->getVille() === $this) {
                $ville->setVille(null);
            }
        }

        return $this;
    }

    public function getDepartement(): ?Departement
    {
        return $this->departement;
    }

    public function setDepartement(?Departement $departement): self
    {
        $this->departement = $departement;

        return $this;
    }
}
