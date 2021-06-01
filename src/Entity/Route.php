<?php

namespace App\Entity;

use App\Repository\RouteRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=RouteRepository::class)
 */
class Route
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
    private $Route;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $numeroRoute;

    /**
     * @ORM\ManyToMany(targetEntity=PassageAGue::class, inversedBy="route")
     */
    private $PassageAGue;

    /**
     * @ORM\ManyToOne(targetEntity=Ville::class, inversedBy="ville")
     * @ORM\JoinColumn(nullable=false)
     */
    private $ville;

    public function __construct()
    {
        $this->PassageAGue = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRoute(): ?string
    {
        return $this->Route;
    }

    public function setRoute(?string $Route): self
    {
        $this->Route = $Route;

        return $this;
    }

    public function getNumeroRoute(): ?string
    {
        return $this->numeroRoute;
    }

    public function setNumeroRoute(?string $numeroRoute): self
    {
        $this->numeroRoute = $numeroRoute;

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

    public function getVille(): ?Ville
    {
        return $this->ville;
    }

    public function setVille(?Ville $ville): self
    {
        $this->ville = $ville;

        return $this;
    }
}
