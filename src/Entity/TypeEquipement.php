<?php

namespace App\Entity;

use App\Repository\TypeEquipementRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TypeEquipementRepository::class)
 */
class TypeEquipement
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
    private $nomTypeEquipement;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $descriptionTypeEquipement;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomTypeEquipement(): ?string
    {
        return $this->nomTypeEquipement;
    }

    public function setNomTypeEquipement(?string $nomTypeEquipement): self
    {
        $this->nomTypeEquipement = $nomTypeEquipement;

        return $this;
    }

    public function getDescriptionTypeEquipement(): ?string
    {
        return $this->descriptionTypeEquipement;
    }

    public function setDescriptionTypeEquipement(?string $descriptionTypeEquipement): self
    {
        $this->descriptionTypeEquipement = $descriptionTypeEquipement;

        return $this;
    }


    ////////////
    public function __toString() {
        return $this->nomTypeEquipement;
    }

    /////////////////////
}
