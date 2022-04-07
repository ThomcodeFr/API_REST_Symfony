<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

use ApiPlatform\Core\Annotation\ApiResource;
/**
 * Utilisateur
 *
 * @ORM\Table(name="UTILISATEUR")
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\Auteur")
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


}
