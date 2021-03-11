<?php

namespace App\Entity;

use App\Repository\NbrRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=NbrRepository::class)
 */
class Nbr
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $NbrMembre;

    /**
     * @ORM\Column(type="integer")
     */
    private $NbrVu;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNbrMembre(): ?int
    {
        return $this->NbrMembre;
    }

    public function setNbrMembre(int $NbrMembre): self
    {
        $this->NbrMembre = $NbrMembre;

        return $this;
    }

    public function getNbrVu(): ?int
    {
        return $this->NbrVu;
    }

    public function setNbrVu(int $NbrVu): self
    {
        $this->NbrVu = $NbrVu;

        return $this;
    }
}
