<?php

namespace App\Entity;

use App\Repository\ConducteurRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ConducteurRepository::class)]
class Conducteur
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 20)]
    private ?string $tabac = null;

    #[ORM\Column(length: 15)]
    private ?string $animal = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $preferences = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTabac(): ?string
    {
        return $this->tabac;
    }

    public function setTabac(string $tabac): static
    {
        $this->tabac = $tabac;

        return $this;
    }

    public function getAnimal(): ?string
    {
        return $this->animal;
    }

    public function setAnimal(string $animal): static
    {
        $this->animal = $animal;

        return $this;
    }

    public function getPreferences(): ?string
    {
        return $this->preferences;
    }

    public function setPreferences(?string $preferences): static
    {
        $this->preferences = $preferences;

        return $this;
    }
}
