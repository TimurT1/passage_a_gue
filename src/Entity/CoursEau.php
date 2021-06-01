<?php

namespace App\Entity;

use App\Repository\CoursEauRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CoursEauRepository::class)
 */
class CoursEau
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
    private $nomCoursEau;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $descriptionCoursEau;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomCoursEau(): ?string
    {
        return $this->nomCoursEau;
    }

    public function setNomCoursEau(?string $nomCoursEau): self
    {
        $this->nomCoursEau = $nomCoursEau;

        return $this;
    }

    public function getDescriptionCoursEau(): ?string
    {
        return $this->descriptionCoursEau;
    }

    public function setDescriptionCoursEau(?string $descriptionCoursEau): self
    {
        $this->descriptionCoursEau = $descriptionCoursEau;

        return $this;
    }
    public function __toString() {
        return $this->nomCoursEau;
    }
}
