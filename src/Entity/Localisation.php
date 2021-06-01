<?php

namespace App\Entity;

use App\Repository\LocalisationRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=LocalisationRepository::class)
 */
class Localisation
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
    private $nomLocalisation;

    /**
     * @ORM\OneToMany(targetEntity=PassageAGue::class, mappedBy="localisation")
     */
    private $Localisation;

    public function __construct()
    {
        $this->Localisation = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomLocalisation(): ?string
    {
        return $this->nomLocalisation;
    }

    public function setNomLocalisation(?string $nomLocalisation): self
    {
        $this->nomLocalisation = $nomLocalisation;

        return $this;
    }

    /**
     * @return Collection|PassageAGue[]
     */
    public function getLocalisation(): Collection
    {
        return $this->Localisation;
    }

    public function addLocalisation(PassageAGue $localisation): self
    {
        if (!$this->Localisation->contains($localisation)) {
            $this->Localisation[] = $localisation;
            $localisation->setLocalisation($this);
        }

        return $this;
    }

    public function removeLocalisation(PassageAGue $localisation): self
    {
        if ($this->Localisation->removeElement($localisation)) {
            // set the owning side to null (unless already changed)
            if ($localisation->getLocalisation() === $this) {
                $localisation->setLocalisation(null);
            }
        }

        return $this;
    }

    public function __toString() {
        return $this->nomLocalisation;
    }
}
