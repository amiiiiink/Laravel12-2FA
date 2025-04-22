<?php

namespace Modules\TwoFactorAuth\Facades;

use Illuminate\Support\Facades\Facade;

class UserProviderFacade extends Facade
{

    protected static function getFacadeAccessor()
    {
        return 'UserProvider';
    }

    public static function shouldProxyTo(string $class)
    {
        app()->singleton(static::getFacadeAccessor(),$class);
    }
}
