<?php

namespace App\Entity;

use App\Repository\ClasseRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ClasseRepository::class)
 */
class Classe
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Niveau;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $NomClasse;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $NiveauC;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $NomCl;

    /**
     * @ORM\Column(type="array", nullable=true)
     */
    private $prof = [];

    /**
     * @ORM\ManyToOne(targetEntity=Prof::class, inversedBy="Classe")
     */
    private $Profs;

    /**
     * @ORM\OneToMany(targetEntity=Eleve::class, mappedBy="Classe")
     */
    private $eleves;

    public function __construct()
    {
        $this->eleves = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNiveau(): ?string
    {
        return $this->Niveau;
    }

    public function setNiveau(string $Niveau): self
    {
        $this->Niveau = $Niveau;

        return $this;
    }

    public function getNomClasse(): ?string
    {
        return $this->NomClasse;
    }

    public function setNomClasse(string $NomClasse): self
    {
        $this->NomClasse = $NomClasse;

        return $this;
    }

    public function getNiveauC(): ?string
    {
        return $this->NiveauC;
    }

    public function setNiveauC(string $NiveauC): self
    {
        $this->NiveauC = $NiveauC;

        return $this;
    }

    public function getNomCl(): ?string
    {
        return $this->NomCl;
    }

    public function setNomCl(string $NomCl): self
    {
        $this->NomCl = $NomCl;

        return $this;
    }

    public function getProf(): ?array
    {
        return $this->prof;
    }

    public function setProf(?array $prof): self
    {
        $this->prof = $prof;

        return $this;
    }

    public function getProfs(): ?Prof
    {
        return $this->Profs;
    }

    public function setProfs(?Prof $Profs): self
    {
        $this->Profs = $Profs;

        return $this;
    }

    /**
     * @return Collection|Eleve[]
     */
    public function getEleves(): Collection
    {
        return $this->eleves;
    }

    public function addElefe(Eleve $elefe): self
    {
        if (!$this->eleves->contains($elefe)) {
            $this->eleves[] = $elefe;
            $elefe->setClasse($this);
        }

        return $this;
    }

    public function removeElefe(Eleve $elefe): self
    {
        if ($this->eleves->removeElement($elefe)) {
            // set the owning side to null (unless already changed)
            if ($elefe->getClasse() === $this) {
                $elefe->setClasse(null);
            }
        }

        return $this;
    }
}
