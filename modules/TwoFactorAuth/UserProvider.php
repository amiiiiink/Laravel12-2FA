<?php

namespace Modules\TwoFactorAuth;

use Modules\TwoFactorAuth\Contracts\UserProviderInterface;

class UserProvider implements UserProviderInterface
{
    public function getUserByEmail(string $email): string
    {
        return $email;
    }
}
