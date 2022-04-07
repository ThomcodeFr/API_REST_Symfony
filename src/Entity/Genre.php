<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

use ApiPlatform\Core\Annotation\ApiResource;
/**
 * Genre
 *
 * @ORM\Table(name="GENRE")
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\Auteur")
 */

class Genre
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_Genre", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idGenre;

    /**
     * @var string
     *
     * @ORM\Column(name="Genre", type="string", length=20, nullable=false)
     */
    private $genre;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Description", type="string", length=255, nullable=true)
     */
    private $description;


}
