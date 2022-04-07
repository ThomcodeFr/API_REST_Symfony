<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

use ApiPlatform\Core\Annotation\ApiResource;
/**
 * Classement
 *
 * @ORM\Table(name="CLASSEMENT", indexes={@ORM\Index(name="ISBN", columns={"ISBN"}), @ORM\Index(name="ID_Genre", columns={"ID_Genre"})})
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\Auteur")
 */

class Classement
{
    /**
     * @var \Genre
     *
     * @ORM\ManyToOne(targetEntity="Genre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_Genre", referencedColumnName="ID_Genre")
     * })
     */
    private $idGenre;

    /**
     * @var \Emprunts
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Emprunts")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ISBN", referencedColumnName="ISBN")
     * })
     */
    private $isbn;


}
