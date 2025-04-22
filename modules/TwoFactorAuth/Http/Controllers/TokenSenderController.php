<?php

namespace Modules\TwoFactorAuth\Http\Controllers;

use App\Http\Controllers\Controller;
use Modules\TwoFactorAuth\Facades\UserProviderFacade;
use Modules\TwoFactorAuth\UserProvider;

class TokenSenderController extends Controller
{
    public function __construct(public UserProvider $userProvider)
    {

    }
    public function issueToken()
    {
        return $this->userProvider->getUserByEmail('akarimi@gmail.com');
//        return UserProvider::getUserByEmail('akarimi@gmail.com');
    }
}
