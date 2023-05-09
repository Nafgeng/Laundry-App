<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DefaultController extends Controller
{
    public function home()
    {
        return view('layouts.landing-page');
    }

    //login view
    public function login()
    {
        return view('layouts.login');
    }
}
