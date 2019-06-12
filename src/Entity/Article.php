<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Article
 *
 * @ORM\Table(name="article")
 * @ORM\Entity
 */
class Article
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="designation", type="string", length=255, nullable=false)
     */
    private $designation;

    /**
     * @var int
     *
     * @ORM\Column(name="quantite", type="integer", nullable=false)
     */
    private $quantite;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_atricle", type="datetime", nullable=false)
     */
    private $dateAtricle;

    /**
     * @var boolean
     *
     * @ORM\Column(name="estLivre", type="boolean")
     */
    private $estLivre=true;
    
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

    public function getEstLivre(): ?bool
    {
        return $this->estLivre;
    }

    public function setEstLivre(bool $estLivre): self
    {
        $this->estLivre = $estLivre;

        return $this;
    }


}
