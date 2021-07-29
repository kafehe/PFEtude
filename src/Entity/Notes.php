<?php

namespace App\Entity;

use App\Repository\NotesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=NotesRepository::class)
 */
class Notes
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $idN;
    /**
     * @ORM\ManyToOne(targetEntity=Etudiant::class, inversedBy="idN")
     */
    private $idE;
    /**
     * @ORM\ManyToOne(targetEntity=Matiere::class, inversedBy="idN")
     */
    private $idM;
    /**
     * @ORM\ManyToOne(targetEntity=Professeur::class, inversedBy="idN")
     */
    private $idP;
    /**
     * @ORM\Column(type="string", length=100)
     */
    private $note;
    /**
     * @ORM\Column(type="text")
     */
    private $commentaire;
    public function getId(): ?int
    {
        return $this->id;
    }
}