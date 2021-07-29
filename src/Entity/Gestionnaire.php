<?php

namespace App\Entity;

use App\Repository\GestionnaireRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=GestionnaireRepository::class)
 */
class Gestionnaire
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $idG;
    /**
     * @ORM\Column(type="string", length=100)
     */
    private $Prenom;
    /**
     * @ORM\Column(type="string", length=100)
     */
    private $Nom;
    /**
     * @ORM\Column(type="string", length=100)
     */
    private $Tel;
    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="idG")
     */
    private $idU;


    public function getId(): ?int
    {
        return $this->id;
    }
}