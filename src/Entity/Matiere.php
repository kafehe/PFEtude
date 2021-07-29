<?php

namespace App\Entity;

use App\Repository\MatiereRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=MatiereRepository::class)
 */
class Matiere
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $idM;
    /**
     * @ORM\Column(type="string", length=100)
     */
    private $Libelle;
    /**
     * @ORM\OneToMany(targetEntity=Notes::class, mappedBy="idM")
     */
    private $idN;

    public function getId(): ?int
    {
        return $this->id;
    }
}