<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\RecetteRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass=RecetteRepository::class)
 */
class Recette
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
    private $libelle;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $image;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $ing1;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $ing2;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $ing3;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $ing4;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $ing5;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    public function setLibelle(?string $libelle): self
    {
        $this->libelle = $libelle;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getIng1(): ?string
    {
        return $this->ing1;
    }

    public function setIng1(?string $ing1): self
    {
        $this->ing1 = $ing1;

        return $this;
    }

    public function getIng2(): ?string
    {
        return $this->ing2;
    }

    public function setIng2(?string $ing2): self
    {
        $this->ing2 = $ing2;

        return $this;
    }

    public function getIng3(): ?string
    {
        return $this->ing3;
    }

    public function setIng3(?string $ing3): self
    {
        $this->ing3 = $ing3;

        return $this;
    }

    public function getIng4(): ?string
    {
        return $this->ing4;
    }

    public function setIng4(?string $ing4): self
    {
        $this->ing4 = $ing4;

        return $this;
    }

    public function getIng5(): ?string
    {
        return $this->ing5;
    }

    public function setIng5(?string $ing5): self
    {
        $this->ing5 = $ing5;

        return $this;
    }
}
