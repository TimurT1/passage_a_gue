<?php

namespace App\Entity;

use App\Repository\EquipementRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EquipementRepository::class)
 */
class Equipement
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
    private $nomEquipement;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $photoEquipement;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $detailEquipement;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $etatVestuste;

    /**
     * @ORM\ManyToOne(targetEntity=TypeEquipement::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $idTypeEquipement;

   

    /**
     * @ORM\ManyToOne(targetEntity=PassageAGue::class, inversedBy="equipements", cascade={"persist", "remove"})
     */
    private $passageAGue;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomEquipement(): ?string
    {
        return $this->nomEquipement;
    }

    public function setNomEquipement(?string $nomEquipement): self
    {
        $this->nomEquipement = $nomEquipement;

        return $this;
    }

    public function getPhotoEquipement(): ?string
    {
        return $this->photoEquipement;
    }

    public function setPhotoEquipement(?string $photoEquipement): self
    {
        $this->photoEquipement = $photoEquipement;

        return $this;
    }

    public function getDetailEquipement(): ?string
    {
        return $this->detailEquipement;
    }

    public function setDetailEquipement(?string $detailEquipement): self
    {
        $this->detailEquipement = $detailEquipement;

        return $this;
    }

    public function getEtatVestuste(): ?string
    {
        return $this->etatVestuste;
    }

    public function setEtatVestuste(?string $etatVestuste): self
    {
        $this->etatVestuste = $etatVestuste;

        return $this;
    }

    public function getIdTypeEquipement(): ?TypeEquipement
    {
        return $this->idTypeEquipement;
    }

    public function setIdTypeEquipement(?TypeEquipement $idTypeEquipement): self
    {
        $this->idTypeEquipement = $idTypeEquipement;

        return $this;
    }


 

    public function getPassageAGue(): ?PassageAGue
    {
        return $this->passageAGue;
    }

    public function setPassageAGue(?PassageAGue $passageAGue): self
    {
        $this->passageAGue = $passageAGue;

        return $this;
    }
   //////////////////////
    public function __toString() {
        return $this->passageAGue;
    }

    

 
    
    public function removePassageAGue(PassageAGue $passageAGue): self
    {
        $this->passageAGue->removeEquipement($this);

        return $this;
    }

   
    
    ///////////////////////////////////
    
}
