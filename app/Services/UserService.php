<?php

namespace App\Services;

use App\Services\IUserService;

class UserService implements IUserService
{
    private array $store = [
        "utifmd" => "rahasia"
    ];
    function login(string $user, string $password): bool
    {
        if (!isset($this->store[$user])) {
            return false;
        }
        $correctPassword = $this->store[$user];

        return $password == $correctPassword;
    }
}
