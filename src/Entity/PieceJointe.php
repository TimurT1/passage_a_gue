<?php

namespace App\Entity;

use App\Repository\PieceJointeRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PieceJointeRepository::class)
 */
class PieceJointe
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
    private $titrePieceJointe;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $descriptionPieceJointe;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $cheminPieceJointe;

    /**
     * @ORM\ManyToOne(targetEntity=PassageAGue::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $PassageAGue;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitrePieceJointe(): ?string
    {
        return $this->titrePieceJointe;
    }

    public function setTitrePieceJointe(?string $titrePieceJointe): self
    {
        $this->titrePieceJointe = $titrePieceJointe;

        return $this;
    }

    public function getDescriptionPieceJointe(): ?string
    {
        return $this->descriptionPieceJointe;
    }

    public function setDescriptionPieceJointe(?string $descriptionPieceJointe): self
    {
        $this->descriptionPieceJointe = $descriptionPieceJointe;

        return $this;
    }

    public function getCheminPieceJointe(): ?string
    {
        return $this->cheminPieceJointe;
    }

    public function setCheminPieceJointe(?string $cheminPieceJointe): self
    {
        $this->cheminPieceJointe = $cheminPieceJointe;

        return $this;
    }

    public function getPassageAGue(): ?PassageAGue
    {
        return $this->PassageAGue;
    }

    public function setPassageAGue(?PassageAGue $PassageAGue): self
    {
        $this->PassageAGue = $PassageAGue;

        return $this;
    }
}
