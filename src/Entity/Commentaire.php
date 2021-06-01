<?php

namespace App\Entity;

use App\Repository\CommentaireRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CommentaireRepository::class)
 */
class Commentaire
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $dateCreationCommentaire;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $titreCommentaire;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $texteCommentaire;

    /**
     * @ORM\ManyToOne(targetEntity=User::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $idUtilisateur;

    /**
     * @ORM\ManyToOne(targetEntity=PassageAGue::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $idPassageAGue;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateCreationCommentaire(): ?\DateTimeInterface
    {
        return $this->dateCreationCommentaire;
    }

    public function setDateCreationCommentaire(?\DateTimeInterface $dateCreationCommentaire): self
    {
        $this->dateCreationCommentaire = $dateCreationCommentaire;

        return $this;
    }

    public function getTitreCommentaire(): ?string
    {
        return $this->titreCommentaire;
    }

    public function setTitreCommentaire(?string $titreCommentaire): self
    {
        $this->titreCommentaire = $titreCommentaire;

        return $this;
    }

    public function getTexteCommentaire(): ?string
    {
        return $this->texteCommentaire;
    }

    public function setTexteCommentaire(?string $texteCommentaire): self
    {
        $this->texteCommentaire = $texteCommentaire;

        return $this;
    }

    public function getIdUtilisateur(): ?User
    {
        return $this->idUtilisateur;
    }

    public function setIdUtilisateur(?User $idUtilisateur): self
    {
        $this->idUtilisateur = $idUtilisateur;

        return $this;
    }

    public function getIdPassageAGue(): ?PassageAGue
    {
        return $this->idPassageAGue;
    }

    public function setIdPassageAGue(?PassageAGue $idPassageAGue): self
    {
        $this->idPassageAGue = $idPassageAGue;

        return $this;
    }
}
