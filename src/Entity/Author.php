<?php

namespace App\Entity;

use App\Repository\AuthorRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AuthorRepository::class)]
class Author
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[ORM\OneToMany(targetEntity: Books::class)]
    #[ORM\ManyToOne(targetEntity: User::class)]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $FirstName = null;

    #[ORM\Column(length: 255)]
    private ?string $LastName = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $BirthDate = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $CreationDate = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $ModificationDate = null;

    #[ORM\Column(length: 255)]
    private ?string $user = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFirstName(): ?string
    {
        return $this->FirstName;
    }

    public function setFirstName(string $FirstName): static
    {
        $this->FirstName = $FirstName;

        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->LastName;
    }

    public function setLastName(string $LastName): static
    {
        $this->LastName = $LastName;

        return $this;
    }

    public function getBirthDate(): ?\DateTimeInterface
    {
        return $this->BirthDate;
    }

    public function setBirthDate(\DateTimeInterface $BirthDate): static
    {
        $this->BirthDate = $BirthDate;

        return $this;
    }

    public function getCreationDate(): ?\DateTimeInterface
    {
        return $this->CreationDate;
    }

    public function setCreationDate(\DateTimeInterface $CreationDate): static
    {
        $this->CreationDate = $CreationDate;

        return $this;
    }

    public function getModificationDate(): ?\DateTimeInterface
    {
        return $this->ModificationDate;
    }

    public function setModificationDate(?\DateTimeInterface $ModificationDate): static
    {
        $this->ModificationDate = $ModificationDate;

        return $this;
    }

    public function getUser(): ?string
    {
        return $this->user;
    }

    public function setUser(string $user): static
    {
        $this->user = $user;

        return $this;
    }
}
