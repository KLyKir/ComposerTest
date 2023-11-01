<?php

namespace src\Registration;

class Registration
{
    public function __construct(private string $password = "", public string $username = "", public int $age = 18) {

    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): void
    {
        $this->password = $password;
    }


}