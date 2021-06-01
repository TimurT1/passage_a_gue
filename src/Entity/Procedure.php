<?php

namespace App\Entity;

use App\Repository\ProcedureRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProcedureRepository::class)
 * @ORM\Table(name="`procedure`")
 */
class Procedure
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
    private $nomProcedure;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $detailProcedure;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $dateAjoutProcedure;

    /**
     * @ORM\ManyToOne(targetEntity=PassageAGue::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $PassageAGue;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomProcedure(): ?string
    {
        return $this->nomProcedure;
    }

    public function setNomProcedure(?string $nomProcedure): self
    {
        $this->nomProcedure = $nomProcedure;

        return $this;
    }

    public function getDetailProcedure(): ?string
    {
        return $this->detailProcedure;
    }

    public function setDetailProcedure(?string $detailProcedure): self
    {
        $this->detailProcedure = $detailProcedure;

        return $this;
    }

    public function getDateAjoutProcedure(): ?\DateTimeInterface
    {
        return $this->dateAjoutProcedure;
    }

    public function setDateAjoutProcedure(?\DateTimeInterface $dateAjoutProcedure): self
    {
        $this->dateAjoutProcedure = $dateAjoutProcedure;

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
