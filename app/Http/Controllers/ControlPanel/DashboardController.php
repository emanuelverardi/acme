<?php

namespace App\Http\Controllers\ControlPanel;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        return view('controlpanel.dashboard.index');
    }

}
