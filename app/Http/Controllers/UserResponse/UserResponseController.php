<?php

namespace App\Http\Controllers\UserResponse;

use App\Http\Controllers\Controller;

class UserResponseController extends Controller
{
    public function index()
    {
        return view('user-response.index');
    }

}
