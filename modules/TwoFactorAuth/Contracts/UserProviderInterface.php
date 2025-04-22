<?php

namespace Modules\TwoFactorAuth\Contracts;

interface UserProviderInterface
{
    public function getUserByEmail(string $email): string;
}
