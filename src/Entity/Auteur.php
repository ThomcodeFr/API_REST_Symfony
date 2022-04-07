<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

use ApiPlatform\Core\Annotation\ApiResource;
/**
 * Auteur
 *
 * @ORM\Table(name="AUTEUR")
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\Auteur")
 */

class Auteur
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_Auteur", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAuteur;

    /**
     * @var string
     *
     * @ORM\Column(name="Nom_Auteur", type="string", length=20, nullable=false)
     */
    private $nomAuteur;

    /**
     * @var string
     *
     * @ORM\Column(name="Prenom_Auteur", type="string", length=20, nullable=false)
     */
    private $prenomAuteur;


}
