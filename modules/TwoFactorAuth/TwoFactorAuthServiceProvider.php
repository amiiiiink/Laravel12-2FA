<?php
namespace Modules\TwoFactorAuth;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Modules\TwoFactorAuth\Facades\UserProviderFacade;

class TwoFactorAuthServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->loadRoutes();
    }
    public function register()
    {
        parent::register();
        UserProviderFacade::shouldProxyTo(UserProvider::class);
    }

    protected function loadRoutes(): void
    {
        Route::middleware('web')
        ->group(base_path('modules/TwoFactorAuth/routes.php'));
    }
}
