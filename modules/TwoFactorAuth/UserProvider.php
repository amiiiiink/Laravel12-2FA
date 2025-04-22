<?php

namespace Modules\TwoFactorAuth;

class UserProvider
{
    public function getUserByEmail(string $email)
    {
        return ['email'=>'iman@gmail.com'];
    }
}
