<?php

namespace App\Providers;

use App\Interfaces\CardInterface;
use App\Services\CardService;
use Illuminate\Support\ServiceProvider;

class CardServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->app->bind(CardInterface::class, CardService::class);
    }
}
