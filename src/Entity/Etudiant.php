<?php

namespace App\Entity;

use App\Repository\EtudiantRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EtudiantRepository::class)
 */
class Etudiant
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */

    private $idE;
    /**
     * @ORM\Column(type="string", length=100)
     */
    private $Nom;
    /**
     * @ORM\Column(type="string", length=100)
     */
    private $Prenom;
    /**
     * @ORM\Column(type="string", length=100)
     */
    private $classe;
    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="idE")
     */
    private $idU;
    /**
     * @ORM\OneToMany(targetEntity=Notes::class, mappedBy="idE")
     */
    private $idN;

    public function getIdE(): ?int
    {
        return $this->idE;
    }
}