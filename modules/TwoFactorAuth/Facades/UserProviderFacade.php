<?php
namespace Modules\TwoFactorAuth\Facades;


use Illuminate\Support\Facades\Facade;

/**
 * Class User Api Client
 * This service is internal
 *
 * @method static getUserByEmail(string $email)
 */
class UserProviderFacade extends Facade
{

    protected static function getFacadeAccessor(): string
    {
        return 'UserProvider';
    }

    public static function shouldProxyTo(string $class): void
    {
        app()->singleton(static::getFacadeAccessor(),$class);
    }
}
