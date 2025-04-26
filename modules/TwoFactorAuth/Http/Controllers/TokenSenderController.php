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
        $email=request('email');
        $user=UserProviderFacade::getUserByEmail($email);

        $token = random_int(100000,1000000-1);
        cache()->set($token.'_2factor_auth',$user->id,120);

        return response()->json([
            'id' => $user->id,
            'email' => $user->email,
            'name' => $user->name,
        ]);
    }
}
