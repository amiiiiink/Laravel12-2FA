<?php

namespace Modules\TwoFactorAuth;

class UserProvider
{
    public function getUserByEmail(string $email): string
    {
        return $email;
    }
}
