<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class TwoFactorAuthServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->loadRoutes();
    }

    protected function loadRoutes(): void
    {
        Route::middleware('web')
        ->group(base_path('modules/TwoFactorAuth/routes.php'));
    }
}
