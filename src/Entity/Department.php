<?php

namespace App\Entity;

use App\Repository\DepartmentRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=DepartmentRepository::class)
 */
class Department
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $sigles;

    /**
     * @ORM\Column(type="string", length=10)
     */

    protected $nom;

    /**
     * @ORM\Column(type="string", length=600)
     */

    public function getId(): ?int
    {
        return $this->id;
    }
}
