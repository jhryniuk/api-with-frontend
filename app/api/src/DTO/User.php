<?php

namespace App\DTO;

use \App\Entity\User as UserEntity;

class User
{
    private $user;

    public function __construct(UserEntity $user)
    {
        $this->user = $user;
    }

    public function toArray()
    {
        return [
            'id' => $this->user->getId(),
            'email' => $this->user->getEmail(),
            'roles' => $this->user->getRoles(),
            'identifier' => $this->user->getUserIdentifier(),
            'image' => $this->user->getImage()?->getId(),
        ];
    }

    public function toObject(): UserEntity
    {
        return $this->user;
    }
}
