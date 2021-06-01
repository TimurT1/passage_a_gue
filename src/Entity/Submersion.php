<?php

namespace App\Entity;

use App\Repository\SubmersionRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SubmersionRepository::class)
 */
class Submersion
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
    private $nomSubmersion;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $dateSubmersion;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $descriptionSubmersion;

    /**
     * @ORM\ManyToMany(targetEntity=PassageAGue::class, inversedBy="submersions")
     */
    private $PassageAGue;

    public function __construct()
    {
        $this->PassageAGue = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomSubmersion(): ?string
    {
        return $this->nomSubmersion;
    }

    public function setNomSubmersion(?string $nomSubmersion): self
    {
        $this->nomSubmersion = $nomSubmersion;

        return $this;
    }

    public function getDateSubmersion(): ?\DateTimeInterface
    {
        return $this->dateSubmersion;
    }

    public function setDateSubmersion(?\DateTimeInterface $dateSubmersion): self
    {
        $this->dateSubmersion = $dateSubmersion;

        return $this;
    }

    public function getDescriptionSubmersion(): ?string
    {
        return $this->descriptionSubmersion;
    }

    public function setDescriptionSubmersion(?string $descriptionSubmersion): self
    {
        $this->descriptionSubmersion = $descriptionSubmersion;

        return $this;
    }

    /**
     * @return Collection|PassageAGue[]
     */
    public function getPassageAGue(): Collection
    {
        return $this->PassageAGue;
    }

    public function addPassageAGue(PassageAGue $passageAGue): self
    {
        if (!$this->PassageAGue->contains($passageAGue)) {
            $this->PassageAGue[] = $passageAGue;
        }

        return $this;
    }

    public function removePassageAGue(PassageAGue $passageAGue): self
    {
        $this->PassageAGue->removeElement($passageAGue);

        return $this;
    }
}
