<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ItemRepository")
 */
class Item
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $picture;

    /**
     * @ORM\Column(type="integer")
     */
    private $riotId;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPicture(): ?int
    {
        return $this->picture;
    }

    public function setPicture(int $picture): self
    {
        $this->picture = $picture;

        return $this;
    }

    public function getRiotId(): ?int
    {
        return $this->riotId;
    }

    public function setRiotId(int $riotId): self
    {
        $this->riotId = $riotId;

        return $this;
    }
}
