<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ArticleRepository")
 */
class Article
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
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $designation;

    /**
     * @ORM\Column(type="integer")
     */
    private $quantite;
    /**
     * @ORM\Column(type="date")
     */
    private $dateAtricle;

    /**
     * @var boolean
     * 
     * @ORM\Column(name="estLivre", type="boolean")
     */
    private $estLivre=true;

    //Foncction pour generer automatiquement une date lorsqu'un article est créé:
    public function __construct()
    {
       $this-> dateAtricle=new \DateTime('nom');
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getDesignation(): ?string
    {
        return $this->designation;
    }

    public function setDesignation(string $designation): self
    {
        $this->designation = $designation;

        return $this;
    }

    public function getQuantite(): ?int
    {
        return $this->quantite;
    }

    public function setQuantite(int $quantite): self
    {
        $this->quantite = $quantite;

        return $this;
    }

    public function getDateAtricle(): ?\DateTimeInterface
    {
        return $this->dateAtricle;
    }

    public function setDateAtricle(\DateTimeInterface $dateAtricle): self
    {
        $this->dateAtricle = $dateAtricle;

        return $this;
    }
}
