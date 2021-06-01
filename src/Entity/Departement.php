<?php

namespace App\Entity;

use App\Repository\DepartementRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=DepartementRepository::class)
 */
class Departement
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
    private $nomDepartement;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $numeroDepartement;

    /**
     * @ORM\OneToMany(targetEntity=Ville::class, mappedBy="departement")
     */
    private $departement;

    public function __construct()
    {
        $this->departement = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomDepartement(): ?string
    {
        return $this->nomDepartement;
    }

    public function setNomDepartement(?string $nomDepartement): self
    {
        $this->nomDepartement = $nomDepartement;

        return $this;
    }

    public function getNumeroDepartement(): ?string
    {
        return $this->numeroDepartement;
    }

    public function setNumeroDepartement(?string $numeroDepartement): self
    {
        $this->numeroDepartement = $numeroDepartement;

        return $this;
    }

    /**
     * @return Collection|Ville[]
     */
    public function getDepartement(): Collection
    {
        return $this->departement;
    }

    public function addDepartement(Ville $departement): self
    {
        if (!$this->departement->contains($departement)) {
            $this->departement[] = $departement;
            $departement->setDepartement($this);
        }

        return $this;
    }

    public function removeDepartement(Ville $departement): self
    {
        if ($this->departement->removeElement($departement)) {
            // set the owning side to null (unless already changed)
            if ($departement->getDepartement() === $this) {
                $departement->setDepartement(null);
            }
        }

        return $this;
    }
}
