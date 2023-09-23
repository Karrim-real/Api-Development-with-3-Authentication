<?php

namespace App\Providers;

use App\Interfaces\DenominationInterface;
use App\Services\DenominationService;
use Illuminate\Support\ServiceProvider;

class DenominationServiceProvider extends ServiceProvider
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
        $this->app->bind(DenominationInterface::class, DenominationService::class);
    }
}
