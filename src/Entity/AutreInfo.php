<?php

namespace App\Entity;

use App\Repository\AutreInfoRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AutreInfoRepository::class)
 */
class AutreInfo
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
    private $titreAutreInfo;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $detailAutreInfo;

    /**
     * @ORM\ManyToOne(targetEntity=PassageAGue::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $PassageAGue;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitreAutreInfo(): ?string
    {
        return $this->titreAutreInfo;
    }

    public function setTitreAutreInfo(?string $titreAutreInfo): self
    {
        $this->titreAutreInfo = $titreAutreInfo;

        return $this;
    }

    public function getDetailAutreInfo(): ?string
    {
        return $this->detailAutreInfo;
    }

    public function setDetailAutreInfo(?string $detailAutreInfo): self
    {
        $this->detailAutreInfo = $detailAutreInfo;

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
