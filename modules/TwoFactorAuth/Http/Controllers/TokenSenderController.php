<?php

namespace Modules\TwoFactorAuth\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Modules\TwoFactorAuth\Contracts\UserProviderInterface;
use Modules\TwoFactorAuth\Facades\UserProviderFacade;
use Modules\TwoFactorAuth\UserProvider;

class TokenSenderController extends Controller
{
//    public function __construct(public UserProviderInterface $userProvider)
//    {
//
//    }
    public function issueToken()
    {
        return  request('email');

//        $user = User::query()->where('email', $email)->first();
//        $token = random_int(100000,1000000-1);
//        cache()->set($token.'_2factor_auth',$user->id,120);
    }
}
