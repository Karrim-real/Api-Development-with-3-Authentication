<?php

namespace App\Providers;

use App\Interfaces\PaymentInterface;
use App\Services\PaymentService;
use Illuminate\Support\ServiceProvider;

class PaymentServiceProvider extends ServiceProvider
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
        $this->app->bind(PaymentInterface::class, PaymentService::class);
    }
}
