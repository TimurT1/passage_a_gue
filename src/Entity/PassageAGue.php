<?php

namespace App\Entity;

use App\Repository\PassageAGueRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PassageAGueRepository::class)
 */
class PassageAGue
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;
    
    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $gpsX;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $gpsY;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $frequenceSubmersion;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=0, nullable=true)
     */
    private $largeurPassage;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=0, nullable=true)
     */
    private $longueurPassage;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $traficJournalier;

    /**
     * @ORM\Column(type="boolean")
     */
    private $boolLimitationRespectee;

    /**
     * @ORM\Column(type="boolean")
     */
    private $boolArchive;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $tauxAccidentalite;

    /**
     * @ORM\ManyToOne(targetEntity=User::class)
     */
    private $idUtilisateur;

    /**
     * @ORM\ManyToMany(targetEntity=User::class, mappedBy="idPassageAGue")
     */
    private $users;

    /**
     * @ORM\ManyToMany(targetEntity=Submersion::class, mappedBy="PassageAGue")
     */
    private $submersions;


    
   

    /**
     * @ORM\ManyToOne(targetEntity=TypeOuvrage::class, inversedBy="TypeOuvrage")
     */
    private $TypeOuvrage;

    /**
     * @ORM\ManyToOne(targetEntity=CoursEau::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $CoursEau;

    /**
     * @ORM\ManyToOne(targetEntity=Localisation::class, inversedBy="Localisation")
     * @ORM\JoinColumn(nullable=false)
     */
    private $localisation;

    /**
     * @ORM\ManyToMany(targetEntity=Route::class, mappedBy="PassageAGue")
     */
    private $route;

    /**
     * @ORM\OneToMany(targetEntity=Equipement::class, mappedBy="passageAGue", cascade={"persist", "remove"}))
     */
    private $equipements;

    /**
     * @ORM\OneToMany(targetEntity=Procedure::class, mappedBy="PassageAGue", cascade={"persist", "remove"}))
     */
    private $procedures;

    public function __construct()
    {
        $this->users = new ArrayCollection();
        $this->submersions = new ArrayCollection();
        $this->route = new ArrayCollection();
        $this->equipements = new ArrayCollection();
        $this->procedures = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }
  
    public function getGpsX(): ?float
    {
        return $this->gpsX;
    }

    public function setGpsX(?float $gpsX): self
    {
        $this->gpsX = $gpsX;

        return $this;
    }

    public function getGpsY(): ?float
    {
        return $this->gpsY;
    }

    public function setGpsY(?float $gpsY): self
    {
        $this->gpsY = $gpsY;

        return $this;
    }

    public function getFrequenceSubmersion(): ?string
    {
        return $this->frequenceSubmersion;
    }

    public function setFrequenceSubmersion(?string $frequenceSubmersion): self
    {
        $this->frequenceSubmersion = $frequenceSubmersion;

        return $this;
    }

    public function getLargeurPassage(): ?string
    {
        return $this->largeurPassage;
    }

    public function setLargeurPassage(?string $largeurPassage): self
    {
        $this->largeurPassage = $largeurPassage;

        return $this;
    }

    public function getLongueurPassage(): ?string
    {
        return $this->longueurPassage;
    }

    public function setLongueurPassage(?string $longueurPassage): self
    {
        $this->longueurPassage = $longueurPassage;

        return $this;
    }

    public function getTraficJournalier(): ?int
    {
        return $this->traficJournalier;
    }

    public function setTraficJournalier(?int $traficJournalier): self
    {
        $this->traficJournalier = $traficJournalier;

        return $this;
    }

    public function getBoolLimitationRespectee(): ?bool
    {
        return $this->boolLimitationRespectee;
    }

    public function setBoolLimitationRespectee(bool $boolLimitationRespectee): self
    {
        $this->boolLimitationRespectee = $boolLimitationRespectee;

        return $this;
    }

    public function getBoolArchive(): ?bool
    {
        return $this->boolArchive;
    }

    public function setBoolArchive(bool $boolArchive): self
    {
        $this->boolArchive = $boolArchive;

        return $this;
    }

    public function getTauxAccidentalite(): ?string
    {
        return $this->tauxAccidentalite;
    }

    public function setTauxAccidentalite(?string $tauxAccidentalite): self
    {
        $this->tauxAccidentalite = $tauxAccidentalite;

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

    /**
     * @return Collection|User[]
     */
    public function getUsers(): Collection
    {
        return $this->users;
    }

    public function addUser(User $user): self
    {
        if (!$this->users->contains($user)) {
            $this->users[] = $user;
            $user->addIdPassageAGue($this);
        }

        return $this;
    }

    public function removeUser(User $user): self
    {
        if ($this->users->removeElement($user)) {
            $user->removeIdPassageAGue($this);
        }

        return $this;
    }

    /**
     * @return Collection|Submersion[]
     */
    public function getSubmersions(): Collection
    {
        return $this->submersions;
    }

    /**
     * @return Collection|Equipement[]
     */
    public function getEquipements(): Collection
    {
        return $this->equipements;
    }

    /**
     * @return Collection|Procedure[]
     */
    public function getProcedures(): Collection
    {
        return $this->procedures;
    }

    public function addSubmersion(Submersion $submersion): self
    {
        if (!$this->submersions->contains($submersion)) {
            $this->submersions[] = $submersion;
            $submersion->addPassageAGue($this);
        }

        return $this;
    }


    public function addEquipement(Equipement $equipement): self
    {
        if (!$this->equipements->contains($equipement)) {
            $this->equipements[] = $equipement;
            $equipement->setpassageAGue($this);
        }

        return $this;
    }

    public function addProcedure(Procedure $procedure): self
    {
        if (!$this->procedures->contains($procedure)) {
            $this->procedures[] = $procedure;
            $procedure->setpassageAGue($this);
        }

        return $this;
    }


    public function removeSubmersion(Submersion $submersion): self
    {
        if ($this->submersions->removeElement($submersion)) {
            $submersion->removePassageAGue($this);
        }

        return $this;
    }

    public function removeEquipement(Equipement $equipement): self
    {
        if ($this->equipements->removeElement($equipement)) {
            //$equipement->removePassageAGue($this);
           
            //$equipement->setPassageAGue($this);

            
            if ($equipement->getPassageAGue() === $this) {
                //$equipement->setPassageAGue($this);
                $equipement->setPassageAGue(null);
            }
            
        }

        return $this;
    }

    public function removeProcedure(Procedure $procedure): self
    {
        if ($this->procedures->removeElement($procedure)) {
            //$equipement->removePassageAGue($this);
           
            //$equipement->setPassageAGue($this);

            
            if ($procedure->getPassageAGue() === $this) {
                //$equipement->setPassageAGue($this);
                $procedure->setPassageAGue(null);
            }
            
        }

        return $this;
    }





/*
    public function addEquipement(Equipement $equipement): self
    {
        if (!$this->equipements->contains($equipement)) {
            $this->equipements[] = $equipement;
            $equipement->setpassageAGue($this);
        }

        return $this;
    }

    
    public function removeEquipement(Equipement $equipement): self
    {
        if ($this->equipements->removeElement($equipement)) {
            // set the owning side to null (unless already changed)
            if ($equipement->getEquipement() === $this) {
                $equipements->setEquipement(null);
            }
        }

        return $this;
    }
*/
  














    

    public function getTypeOuvrage(): ?TypeOuvrage
    {
        return $this->TypeOuvrage;
    }

    public function setTypeOuvrage(?TypeOuvrage $TypeOuvrage): self
    {
        $this->TypeOuvrage = $TypeOuvrage;

        return $this;
    }

    public function getCoursEau(): ?CoursEau
    {
        return $this->CoursEau;
    }

    public function setCoursEau(?CoursEau $CoursEau): self
    {
        $this->CoursEau = $CoursEau;

        return $this;
    }

    public function getLocalisation(): ?Localisation
    {
        return $this->localisation;
    }

    public function setLocalisation(?Localisation $localisation): self
    {
        $this->localisation = $localisation;

        return $this;
    }

    /**
     * @return Collection|Route[]
     */
    public function getRoute(): Collection
    {
        return $this->route;
    }

    public function addRoute(Route $route): self
    {
        if (!$this->route->contains($route)) {
            $this->route[] = $route;
            $route->addPassageAGue($this);
        }

        return $this;
    }

    public function removeRoute(Route $route): self
    {
        if ($this->route->removeElement($route)) {
            $route->removePassageAGue($this);
        }

        return $this;
    }

   
}
