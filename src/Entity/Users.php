<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\Collection;
use Doctrin3e\Common\Collections\ArrayCollection;

#[ORM\Entity(repositoryClass: UserRepository::class)]
class Users
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    #[ORM\Column(name: "idClient", type: "integer", nullable: false)]
    private ?int $idclient ;

    #[ORM\Column(name: "nom", type: "string", length: 255, nullable: false)]
    private ?string $nom ;

    #[ORM\Column(name: "prenom", type: "string", length: 255, nullable: false)]
    private ?string $prenom ;

    #[ORM\Column(name: "motdepasse", type: "string", length: 255, nullable: false)]
    private ?string $motdepasse ;

    #[ORM\Column(name: "adresse", type: "string", length: 255, nullable: false)]
    private ?string $adresse ;

    #[ORM\Column(name: "email", type: "string", length: 255, nullable: false)]
    private ?string $email ;

    #[ORM\Column(name: "role", type: "integer", nullable: false)]
    private ?int $role ;

    public function getIdclient(): ?int
    {
        return $this->idclient;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): static
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getMotdepasse(): ?string
    {
        return $this->motdepasse;
    }

    public function setMotdepasse(string $motdepasse): static
    {
        $this->motdepasse = $motdepasse;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): static
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;

        return $this;
    }

    public function getRole(): ?int
    {
        return $this->role;
    }

    public function setRole(int $role): static
    {
        $this->role = $role;

        return $this;
    }
}
