<?php

namespace App\Entity;

use App\Repository\EmailRepository;


class Email
{
    
    private $id;

    
    private $monEmail;

    
    private $nomMessage;

    
    private $message;

    
    private $nomEnvoyeur;

    
    private $prenomEnvoyeur;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMonEmail(): ?string
    {
        return $this->monEmail;
    }

    public function setMonEmail(string $monEmail): self
    {
        $this->monEmail = $monEmail;

        return $this;
    }

    public function getNomMessage(): ?string
    {
        return $this->nomMessage;
    }

    public function setNomMessage(string $nomMessage): self
    {
        $this->nomMessage = $nomMessage;

        return $this;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(string $message): self
    {
        $this->message = $message;

        return $this;
    }

    public function getNomEnvoyeur(): ?string
    {
        return $this->nomEnvoyeur;
    }

    public function setNomEnvoyeur(string $nomEnvoyeur): self
    {
        $this->nomEnvoyeur = $nomEnvoyeur;

        return $this;
    }

    public function getPrenomEnvoyeur(): ?string
    {
        return $this->prenomEnvoyeur;
    }

    public function setPrenomEnvoyeur(string $prenomEnvoyeur): self
    {
        $this->prenomEnvoyeur = $prenomEnvoyeur;

        return $this;
    }
}
