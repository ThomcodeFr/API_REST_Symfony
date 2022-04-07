<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

use ApiPlatform\Core\Annotation\ApiResource;
/**
 * Utilisateur
 *
 * @ORM\Table(name="UTILISATEUR")
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\Utilisateur")
 */

class Utilisateur
{
    /**
     * @var string
     *
     * @ORM\Column(name="Role", type="string", length=50, nullable=false)
     */
    private $role;

    /**
     * @var string
     *
     * @ORM\Column(name="Mot_de_passe", type="string", length=50, nullable=false, options={"fixed"=true})
     */
    private $motDePasse;

    /**
     * @var \Emprunteur
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Emprunteur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Mail", referencedColumnName="ID_Mail")
     * })
     */
    private $mail;

    public function getRole(): ?string
    {
        return $this->role;
    }

    public function setRole(string $role): self
    {
        $this->role = $role;

        return $this;
    }

    public function getMotDePasse(): ?string
    {
        return $this->motDePasse;
    }

    public function setMotDePasse(string $motDePasse): self
    {
        $this->motDePasse = $motDePasse;

        return $this;
    }

    public function getMail(): ?Emprunteur
    {
        return $this->mail;
    }

    public function setMail(?Emprunteur $mail): self
    {
        $this->mail = $mail;

        return $this;
    }


}
