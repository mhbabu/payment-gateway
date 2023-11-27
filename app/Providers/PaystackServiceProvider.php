<?php

namespace App\Providers;

use App\Services\PaystackService;
use Illuminate\Support\ServiceProvider;

class PaystackServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register()
{
    $this->app->bind('App\Services\PaystackService', function ($app) {
        return new PaystackService();
    });
}

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
