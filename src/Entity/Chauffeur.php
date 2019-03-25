<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ChauffeurRepository")
 */
class Chauffeur
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $naam;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Logboek", mappedBy="chauffeurId")
     */
    private $logboeks;

    public function __construct()
    {
        $this->logboeks = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNaam(): ?string
    {
        return $this->naam;
    }

    public function setNaam(string $naam): self
    {
        $this->naam = $naam;

        return $this;
    }

    /**
     * @return Collection|Logboek[]
     */
    public function getLogboeks(): Collection
    {
        return $this->logboeks;
    }

    public function addLogboek(Logboek $logboek): self
    {
        if (!$this->logboeks->contains($logboek)) {
            $this->logboeks[] = $logboek;
            $logboek->setChauffeurId($this);
        }

        return $this;
    }

    public function removeLogboek(Logboek $logboek): self
    {
        if ($this->logboeks->contains($logboek)) {
            $this->logboeks->removeElement($logboek);
            // set the owning side to null (unless already changed)
            if ($logboek->getChauffeurId() === $this) {
                $logboek->setChauffeurId(null);
            }
        }

        return $this;
    }

    public function __toString() {         
        return $this->getnaam();
    }
}
