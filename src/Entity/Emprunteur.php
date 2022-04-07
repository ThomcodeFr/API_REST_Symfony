<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

use ApiPlatform\Core\Annotation\ApiResource;
/**
 * Emprunteur
 *
 * @ORM\Table(name="EMPRUNTEUR", indexes={@ORM\Index(name="ID_Mail", columns={"ID_Mail"})})
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\Auteur")
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


}
