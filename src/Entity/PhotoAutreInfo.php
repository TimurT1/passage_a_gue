<?php

namespace App\Entity;

use App\Repository\PhotoAutreInfoRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PhotoAutreInfoRepository::class)
 */
class PhotoAutreInfo
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
    private $photoAutreInfo;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $descriptionPhotoAutreInfo;

    /**
     * @ORM\ManyToOne(targetEntity=AutreInfo::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $AutreInfo;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPhotoAutreInfo(): ?string
    {
        return $this->photoAutreInfo;
    }

    public function setPhotoAutreInfo(?string $photoAutreInfo): self
    {
        $this->photoAutreInfo = $photoAutreInfo;

        return $this;
    }

    public function getDescriptionPhotoAutreInfo(): ?string
    {
        return $this->descriptionPhotoAutreInfo;
    }

    public function setDescriptionPhotoAutreInfo(?string $descriptionPhotoAutreInfo): self
    {
        $this->descriptionPhotoAutreInfo = $descriptionPhotoAutreInfo;

        return $this;
    }

    public function getAutreInfo(): ?AutreInfo
    {
        return $this->AutreInfo;
    }

    public function setAutreInfo(?AutreInfo $AutreInfo): self
    {
        $this->AutreInfo = $AutreInfo;

        return $this;
    }
}
