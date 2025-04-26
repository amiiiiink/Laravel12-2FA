<?php

namespace Modules\TwoFactorAuth;

use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Modules\TwoFactorAuth\Contracts\UserProviderInterface;

class UserProvider
{
    public function getUserByEmail(string $email): Model
    {
        return User::query()->where('email', $email)->first();
    }
}
