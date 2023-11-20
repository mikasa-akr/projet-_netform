<?php

namespace App\Entity;

use App\Repository\MemberRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MemberRepository::class)]
#[ORM\Table(name: '`member`')]
class Member
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\Column(length: 255)]
    private ?string $email = null;

    #[ORM\Column(length: 255)]
    private ?string $password = null;

    #[ORM\OneToMany(mappedBy: 'auteur', targetEntity: Contenu::class)]
    private Collection $contenus;

    #[ORM\ManyToOne(inversedBy: 'membre')]
    private ?Moderateur $moderateur = null;

    public function __construct()
    {
        $this->contenus = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): static
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @return Collection<int, Contenu>
     */
    public function getContenus(): Collection
    {
        return $this->contenus;
    }

    public function addContenu(Contenu $contenu): static
    {
        if (!$this->contenus->contains($contenu)) {
            $this->contenus->add($contenu);
            $contenu->setAuteur($this);
        }

        return $this;
    }

    public function removeContenu(Contenu $contenu): static
    {
        if ($this->contenus->removeElement($contenu)) {
            // set the owning side to null (unless already changed)
            if ($contenu->getAuteur() === $this) {
                $contenu->setAuteur(null);
            }
        }

        return $this;
    }

    public function getModerateur(): ?Moderateur
    {
        return $this->moderateur;
    }

    public function setModerateur(?Moderateur $moderateur): static
    {
        $this->moderateur = $moderateur;

        return $this;
    }
}
