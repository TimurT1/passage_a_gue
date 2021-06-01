<?php

namespace App\Entity;

use App\Repository\PhotoPassageRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PhotoPassageRepository::class)
 */
class PhotoPassage
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
    private $photoPassage;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $descriptionPassage;

    /**
     * @ORM\ManyToOne(targetEntity=PassageAGue::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $PassageAGue;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPhotoPassage(): ?string
    {
        return $this->photoPassage;
    }

    public function setPhotoPassage(?string $photoPassage): self
    {
        $this->photoPassage = $photoPassage;

        return $this;
    }

    public function getDescriptionPassage(): ?string
    {
        return $this->descriptionPassage;
    }

    public function setDescriptionPassage(?string $descriptionPassage): self
    {
        $this->descriptionPassage = $descriptionPassage;

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
