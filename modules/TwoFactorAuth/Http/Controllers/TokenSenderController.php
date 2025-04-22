<?php

namespace Modules\TwoFactorAuth\Http\Controllers;

use App\Http\Controllers\Controller;

class TokenSenderController extends Controller
{
    public function issueToken()
    {
            return "Token issued";
    }
}
