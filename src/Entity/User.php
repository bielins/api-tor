<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 */
class User
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
    private $userNick;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $pass;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUserNick(): ?string
    {
        return $this->userNick;
    }

    public function setUserNick(string $userNick): self
    {
        $this->userNick = $userNick;

        return $this;
    }

    public function getPass(): ?string
    {
        return $this->pass;
    }

    public function setPass(string $pass): self
    {
        $this->pass = $pass;

        return $this;
    }
}
