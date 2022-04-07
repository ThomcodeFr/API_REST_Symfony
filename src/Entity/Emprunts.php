<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

use ApiPlatform\Core\Annotation\ApiResource;
/**
 * Emprunts
 *
 * @ORM\Table(name="EMPRUNTS", indexes={@ORM\Index(name="ID_Emprunteur", columns={"ID_Emprunteur"}), @ORM\Index(name="ISBN", columns={"ISBN"})})
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\Emprunter")
 */

class Emprunts
{
    /**
     * @var string
     *
     * @ORM\Column(name="ISBN", type="string", length=13, nullable=false)
     */
    private $isbn;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Date_Emprunt", type="date", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $dateEmprunt;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Date_Rendu", type="date", nullable=true)
     */
    private $dateRendu;

    /**
     * @var \Emprunteur
     *
     * @ORM\ManyToOne(targetEntity="Emprunteur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_Emprunteur", referencedColumnName="ID_Emprunteur")
     * })
     */
    private $idEmprunteur;

    public function getIsbn(): ?string
    {
        return $this->isbn;
    }

    public function setIsbn(string $isbn): self
    {
        $this->isbn = $isbn;

        return $this;
    }

    public function getDateEmprunt(): ?\DateTimeInterface
    {
        return $this->dateEmprunt;
    }

    public function getDateRendu(): ?\DateTimeInterface
    {
        return $this->dateRendu;
    }

    public function setDateRendu(?\DateTimeInterface $dateRendu): self
    {
        $this->dateRendu = $dateRendu;

        return $this;
    }

    public function getIdEmprunteur(): ?Emprunteur
    {
        return $this->idEmprunteur;
    }

    public function setIdEmprunteur(?Emprunteur $idEmprunteur): self
    {
        $this->idEmprunteur = $idEmprunteur;

        return $this;
    }


}
