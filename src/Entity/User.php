<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

use Symfony\Component\Validator\Constraints as Assert;


/**
 * @ORM\Entity(repositoryClass=UserRepository::class)
 */
class User implements UserInterface
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=180, unique=true)
     */
    private $email;

    /**
     * @ORM\Column(type="json")
     */
    private $roles = [];

    /**
     * @var string The hashed password
     * @ORM\Column(type="string")
     * @Assert\Length(min="8", minMessage="Votre mot de passe doit faire au moins 8 caractères")
     * @Assert\Regex(
     *      pattern="/^(?=.*[A-Z])/",
     *      message="Votre mot de passe doit comporter au moins 1 majuscule."
     * )
     * @Assert\Regex(
     *      pattern="/^(?=.*[a-z])/",
     *      message="Votre mot de passe doit comporter au moins 1 minuscule."
     * )
     * @Assert\Regex(
     *      pattern="/^(?=.*\d)/",
     *      message="Votre mot de passe doit comporter au moins 1 chiffre."
     * )
     * @Assert\Regex(
     *      pattern="/^(?=.*[@$!%*.?&])/",
     *      message="Votre mot de passe doit comporter au moins 1 symbole parmis @ $ ! % * . ? &."
     * )
     */

    private $password;

    /**
     * @Assert\EqualTo(propertyPath="password", message="Vos mots de passes doivent être identiques")
     */

    private $checkPassword;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nomUtilisateur;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $prenomUtilisateur;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $pseudoUtilisateur;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $photoUtilisateur;

    /**
     * @ORM\ManyToMany(targetEntity=PassageAGue::class, inversedBy="users")
     */
    private $idPassageAGue;

    public function __construct()
    {
        $this->idPassageAGue = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUsername(): string
    {
        return (string) $this->email;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }


    public function getCheckPassword(): string
    {
        return $this->checkPassword;
    }

    public function setcheckPassword(string $checkPassword): self
    {
        $this->checkPassword = $checkPassword;
        return $this;
    }

    /**
     * Returning a salt is only needed, if you are not using a modern
     * hashing algorithm (e.g. bcrypt or sodium) in your security.yaml.
     *
     * @see UserInterface
     */
    public function getSalt(): ?string
    {
        return null;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    public function getNomUtilisateur(): ?string
    {
        return $this->nomUtilisateur;
    }

    public function setNomUtilisateur(string $nomUtilisateur): self
    {
        $this->nomUtilisateur = $nomUtilisateur;

        return $this;
    }

    public function getPrenomUtilisateur(): ?string
    {
        return $this->prenomUtilisateur;
    }

    public function setPrenomUtilisateur(string $prenomUtilisateur): self
    {
        $this->prenomUtilisateur = $prenomUtilisateur;

        return $this;
    }

    public function getPseudoUtilisateur(): ?string
    {
        return $this->pseudoUtilisateur;
    }

    public function setPseudoUtilisateur(string $pseudoUtilisateur): self
    {
        $this->pseudoUtilisateur = $pseudoUtilisateur;

        return $this;
    }

    public function getPhotoUtilisateur(): ?string
    {
        return $this->photoUtilisateur;
    }


    public function setPhotoUtilisateur(string $photoUtilisateur): self

    {
        $this->photoUtilisateur = $photoUtilisateur;

        return $this;
    }

    /**
     * @return Collection|PassageAGue[]
     */
    public function getIdPassageAGue(): Collection
    {
        return $this->idPassageAGue;
    }

    public function addIdPassageAGue(PassageAGue $idPassageAGue): self
    {
        if (!$this->idPassageAGue->contains($idPassageAGue)) {
            $this->idPassageAGue[] = $idPassageAGue;
        }

        return $this;
    }

    public function removeIdPassageAGue(PassageAGue $idPassageAGue): self
    {
        $this->idPassageAGue->removeElement($idPassageAGue);

        return $this;
    }
    public function __toString() {
        return $this->nomUtilisateur;
    }
    public function getFullname(): ?string {
        return $this->nomUtilisateur . ' ' . $this->prenomUtilisateur. ' | ' .$this->email;
    }
}
