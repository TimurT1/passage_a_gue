<?php

namespace App\Entity;

use App\Repository\TypeOuvrageRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TypeOuvrageRepository::class)
 */
class TypeOuvrage
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
    private $nomTypeOuvrage;

    /**
     * @ORM\OneToMany(targetEntity=PassageAGue::class, mappedBy="TypeOuvrage")
     */
    private $TypeOuvrage;

    /**
     * @ORM\ManyToOne(targetEntity=FamilleOuvrage::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $FamilleOuvrage;

    public function __construct()
    {
        $this->TypeOuvrage = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomTypeOuvrage(): ?string
    {
        return $this->nomTypeOuvrage;
    }

    public function setNomTypeOuvrage(?string $nomTypeOuvrage): self
    {
        $this->nomTypeOuvrage = $nomTypeOuvrage;

        return $this;
    }

    /**
     * @return Collection|PassageAGue[]
     */
    public function getTypeOuvrage(): Collection
    {
        return $this->TypeOuvrage;
    }

    public function addTypeOuvrage(PassageAGue $typeOuvrage): self
    {
        if (!$this->TypeOuvrage->contains($typeOuvrage)) {
            $this->TypeOuvrage[] = $typeOuvrage;
            $typeOuvrage->setTypeOuvrage($this);
        }

        return $this;
    }

    public function removeTypeOuvrage(PassageAGue $typeOuvrage): self
    {
        if ($this->TypeOuvrage->removeElement($typeOuvrage)) {
            // set the owning side to null (unless already changed)
            if ($typeOuvrage->getTypeOuvrage() === $this) {
                $typeOuvrage->setTypeOuvrage(null);
            }
        }

        return $this;
    }

    public function getFamilleOuvrage(): ?FamilleOuvrage
    {
        return $this->FamilleOuvrage;
    }

    public function setFamilleOuvrage(?FamilleOuvrage $FamilleOuvrage): self
    {
        $this->FamilleOuvrage = $FamilleOuvrage;

        return $this;
    }
    public function __toString() {
        return $this->nomTypeOuvrage;
    }
}
