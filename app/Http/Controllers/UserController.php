<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        // Return the user dashboard view
        return view('user.dashboard');
    }
}
