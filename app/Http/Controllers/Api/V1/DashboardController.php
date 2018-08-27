<?php

namespace App\Http\Controllers\Api\V1;


use App\Http\Controllers\Controller;
use App\Services\Dashboard\DashboardFacade as Dashboard;

class DashboardController extends Controller
{
    public function getTotals()
    {
        return response()->json( Dashboard::getTotals() );
    }
}
