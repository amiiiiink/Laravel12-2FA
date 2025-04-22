<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\TwoFactorAuth\TwoFactorAuthServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
//        $this->app->register(TwoFactorAuthServiceProvider::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
