<?php

namespace App\Entity;

use App\Repository\TricksRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TricksRepository::class)]
class Tricks
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $tricksName;

    #[ORM\Column(type: 'string', length: 255)]
    private $tricksDesign;

    #[ORM\Column(type: 'string', length: 255)]
    private $tricksDescript;

    #[ORM\Column(type: 'string', length: 255)]
    private $tricksFigure;

    #[ORM\Column(type: 'string', length: 255)]
    private $tricksAutor;

    #[ORM\Column(type: 'string', length: 255)]
    private $tricksDate;

    #[ORM\Column(type: 'string', length: 255)]
    private $tricksGroup;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTricksName(): ?string
    {
        return $this->tricksName;
    }

    public function setTricksName(string $tricksName): self
    {
        $this->tricksName = $tricksName;

        return $this;
    }

    public function getTricksDesign(): ?string
    {
        return $this->tricksDesign;
    }

    public function setTricksDesign(string $tricksDesign): self
    {
        $this->tricksDesign = $tricksDesign;

        return $this;
    }

    public function getTricksDescript(): ?string
    {
        return $this->tricksDescript;
    }

    public function setTricksDescript(string $tricksDescript): self
    {
        $this->tricksDescript = $tricksDescript;

        return $this;
    }

    public function getTricksFigure(): ?string
    {
        return $this->tricksFigure;
    }

    public function setTricksFigure(string $tricksFigure): self
    {
        $this->tricksFigure = $tricksFigure;

        return $this;
    }

    public function getTricksAutor(): ?string
    {
        return $this->tricksAutor;
    }

    public function setTricksAutor(string $tricksAutor): self
    {
        $this->tricksAutor = $tricksAutor;

        return $this;
    }

    public function getTricksDate(): ?string
    {
        return $this->tricksDate;
    }

    public function setTricksDate(string $tricksDate): self
    {
        $this->tricksDate = $tricksDate;

        return $this;
    }

    public function getTricksGroup(): ?string
    {
        return $this->tricksGroup;
    }

    public function setTricksGroup(string $tricksGroup): self
    {
        $this->tricksGroup = $tricksGroup;

        return $this;
    }
}
