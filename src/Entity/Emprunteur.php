<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

use ApiPlatform\Core\Annotation\ApiResource;
/**
 * Emprunteur
 *
 * @ORM\Table(name="EMPRUNTEUR", indexes={@ORM\Index(name="ID_Mail", columns={"ID_Mail"})})
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\Emprunteur")
 */

class Emprunteur
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_Emprunteur", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEmprunteur;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_Mail", type="string", length=60, nullable=false)
     */
    private $idMail;

    /**
     * @var string
     *
     * @ORM\Column(name="Prenom_Emprunteur", type="string", length=20, nullable=false)
     */
    private $prenomEmprunteur;

    /**
     * @var int
     *
     * @ORM\Column(name="Telephone", type="integer", nullable=false)
     */
    private $telephone;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Actif", type="boolean", nullable=true)
     */
    private $actif;

    public function getIdEmprunteur(): ?int
    {
        return $this->idEmprunteur;
    }

    public function getIdMail(): ?string
    {
        return $this->idMail;
    }

    public function setIdMail(string $idMail): self
    {
        $this->idMail = $idMail;

        return $this;
    }

    public function getPrenomEmprunteur(): ?string
    {
        return $this->prenomEmprunteur;
    }

    public function setPrenomEmprunteur(string $prenomEmprunteur): self
    {
        $this->prenomEmprunteur = $prenomEmprunteur;

        return $this;
    }

    public function getTelephone(): ?int
    {
        return $this->telephone;
    }

    public function setTelephone(int $telephone): self
    {
        $this->telephone = $telephone;

        return $this;
    }

    public function getActif(): ?bool
    {
        return $this->actif;
    }

    public function setActif(?bool $actif): self
    {
        $this->actif = $actif;

        return $this;
    }


}
