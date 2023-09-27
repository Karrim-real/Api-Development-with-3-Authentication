<?php

namespace App\Providers;

use App\Interfaces\OrderListInterface;
use App\Services\OrderListService;
use Illuminate\Support\ServiceProvider;

class OrderListServiceProvider extends ServiceProvider
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
        $this->app->bind(OrderListInterface::class, OrderListService::class);
    }
}
