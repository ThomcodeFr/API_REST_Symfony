<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

use ApiPlatform\Core\Annotation\ApiResource;
/**
 * Livre
 *
 * @ORM\Table(name="LIVRE", indexes={@ORM\Index(name="ID_Auteur", columns={"ID_Auteur"})})
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\Livre")
 */

class Livre
{
    /**
     * @var string
     *
     * @ORM\Column(name="ISBN", type="string", length=13, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $isbn;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Titre_Livre", type="string", length=70, nullable=true)
     */
    private $titreLivre;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Annee_Edition", type="date", nullable=false)
     */
    private $anneeEdition;

    /**
     * @var \Auteur
     *
     * @ORM\ManyToOne(targetEntity="Auteur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_Auteur", referencedColumnName="ID_Auteur")
     * })
     */
    private $idAuteur;

    public function getIsbn(): ?string
    {
        return $this->isbn;
    }

    public function getTitreLivre(): ?string
    {
        return $this->titreLivre;
    }

    public function setTitreLivre(?string $titreLivre): self
    {
        $this->titreLivre = $titreLivre;

        return $this;
    }

    public function getAnneeEdition(): ?\DateTimeInterface
    {
        return $this->anneeEdition;
    }

    public function setAnneeEdition(\DateTimeInterface $anneeEdition): self
    {
        $this->anneeEdition = $anneeEdition;

        return $this;
    }

    public function getIdAuteur(): ?Auteur
    {
        return $this->idAuteur;
    }

    public function setIdAuteur(?Auteur $idAuteur): self
    {
        $this->idAuteur = $idAuteur;

        return $this;
    }


}
