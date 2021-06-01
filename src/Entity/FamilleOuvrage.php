<?php

namespace App\Entity;

use App\Repository\FamilleOuvrageRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=FamilleOuvrageRepository::class)
 */
class FamilleOuvrage
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
    private $nomFamilleOuvrage;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomFamilleOuvrage(): ?string
    {
        return $this->nomFamilleOuvrage;
    }

    public function setNomFamilleOuvrage(?string $nomFamilleOuvrage): self
    {
        $this->nomFamilleOuvrage = $nomFamilleOuvrage;

        return $this;
    }
}
