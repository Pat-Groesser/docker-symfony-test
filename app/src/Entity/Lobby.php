<?php

namespace App\Entity;

use App\Repository\LobbyRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass=LobbyRepository::class)
 */
class Lobby
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $roomcode;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $gameState;

    /**
     * @ORM\OneToMany(targetEntity=User::class, mappedBy="lobby")
     */
    private $users;

    public function __construct()
    {
        $this->users = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRoomcode(): ?string
    {
        return $this->roomcode;
    }

    public function setRoomcode(string $roomcode): self
    {
        $this->roomcode = $roomcode;

        return $this;
    }

    public function getGameState(): ?string
    {
        return $this->gameState;
    }

    public function setGameState(string $gameState): self
    {
        $this->gameState = $gameState;

        return $this;
    }

    /**
     * @return Collection|User[]
     */
    public function getUsers(): Collection
    {
        return $this->users;
    }

    public function addUser(User $user): self
    {
        if (!$this->users->contains($user)) {
            $this->users[] = $user;
            $user->setLobby($this);
        }

        return $this;
    }

    public function removeUser(User $user): self
    {
        if ($this->users->removeElement($user)) {
            // set the owning side to null (unless already changed)
            if ($user->getLobby() === $this) {
                $user->setLobby(null);
            }
        }

        return $this;
    }
}
