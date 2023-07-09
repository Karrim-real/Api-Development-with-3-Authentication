<?php

namespace App\Providers;

use App\Interfaces\EmployeeInterface;
use App\Services\EmployeeService;
use Illuminate\Support\ServiceProvider;

class EmployeeServiceProvider extends ServiceProvider
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
        $this->app->bind(EmployeeInterface::class, EmployeeService::class);
    }
}
