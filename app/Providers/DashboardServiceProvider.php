<?php

namespace App\Providers;

use App\Services\Dashboard\DashboardService;
use Illuminate\Support\ServiceProvider;

class DashboardServiceProvider extends ServiceProvider
{
    /**
     * Binding Question service
     */
    public function register()
    {
        $this->app->bind('DashboardService', function ($app) {
            return new DashboardService();
        });
    }
}
