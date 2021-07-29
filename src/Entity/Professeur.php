<?php

namespace App\Entity;

use App\Repository\ProfesseurRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProfesseurRepository::class)
 */
class Professeur
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $idP;
    /**
     * @ORM\Column(type="string", length=100)
     */
    private $Nom;
    /**
     * @ORM\Column(type="string", length=100)
     */
    private $Prenom;
    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="idP")
     */
    private $idU;
    /**
     * @ORM\OneToMany(targetEntity=Notes::class, mappedBy="idP")
     */
    private $idN;

    public function getId(): ?int
    {
        return $this->id;
    }
}