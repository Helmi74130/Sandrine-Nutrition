<?php

namespace App\Entity;

use App\Repository\RecetteRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RecetteRepository::class)]
class Recette
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $title = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $description = null;

    #[ORM\Column]
    private ?int $preparationtime = null;

    #[ORM\Column(nullable: true)]
    private ?int $timeout = null;

    #[ORM\Column]
    private ?int $cookingtime = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $ingredient = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $steps = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $allergens = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $regime = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getPreparationtime(): ?int
    {
        return $this->preparationtime;
    }

    public function setPreparationtime(int $preparationtime): self
    {
        $this->preparationtime = $preparationtime;

        return $this;
    }

    public function getTimeout(): ?int
    {
        return $this->timeout;
    }

    public function setTimeout(?int $timeout): self
    {
        $this->timeout = $timeout;

        return $this;
    }

    public function getCookingtime(): ?int
    {
        return $this->cookingtime;
    }

    public function setCookingtime(int $cookingtime): self
    {
        $this->cookingtime = $cookingtime;

        return $this;
    }

    public function getIngredient(): ?string
    {
        return $this->ingredient;
    }

    public function setIngredient(string $ingredient): self
    {
        $this->ingredient = $ingredient;

        return $this;
    }

    public function getSteps(): ?string
    {
        return $this->steps;
    }

    public function setSteps(string $steps): self
    {
        $this->steps = $steps;

        return $this;
    }

    public function getAllergens(): ?string
    {
        return $this->allergens;
    }

    public function setAllergens(?string $allergens): self
    {
        $this->allergens = $allergens;

        return $this;
    }

    public function getRegime(): ?string
    {
        return $this->regime;
    }

    public function setRegime(?string $regime): self
    {
        $this->regime = $regime;

        return $this;
    }
}
