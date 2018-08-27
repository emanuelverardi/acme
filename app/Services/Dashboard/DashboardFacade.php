<?php

namespace App\Services\Dashboard;

use \Illuminate\Support\Facades\Facade;

/**
 * Facade for dashboard service
 */
class DashboardFacade extends Facade
{
    /**
     * Returning service name
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'App\Services\Dashboard\DashboardService';
    }
}
