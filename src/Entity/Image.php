<?php

namespace App\Entity;

use App\Repository\ImageRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ImageRepository::class)]
class Image
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $file = null;

    #[ORM\Column]
    private ?int $numLikes = null;

    #[ORM\Column]
    private ?int $numViews = null;

    #[ORM\Column]
    private ?int $numDowloads = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFile(): ?string
    {
        return $this->file;
    }

    public function setFile(string $file): self
    {
        $this->file = $file;

        return $this;
    }

    public function getNumLikes(): ?int
    {
        return $this->numLikes;
    }

    public function setNumLikes(int $numLikes): self
    {
        $this->numLikes = $numLikes;

        return $this;
    }

    public function getNumViews(): ?int
    {
        return $this->numViews;
    }

    public function setNumViews(int $numViews): self
    {
        $this->numViews = $numViews;

        return $this;
    }

    public function getNumDowloads(): ?int
    {
        return $this->numDowloads;
    }

    public function setNumDowloads(int $numDowloads): self
    {
        $this->numDowloads = $numDowloads;

        return $this;
    }
}
