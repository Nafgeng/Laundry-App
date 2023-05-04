<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('is_user');
    }

    public function home()
    {
        return view('layouts.landing-page');
    }

    //login view
    public function login()
    {
        return view('layouts.login');
    }

    //user view
    public function user_data_laundry()
    {
        return view('layouts.user.user_data-laundry');
    }

    public function user_artikel_laundry()
    {
        return view('layouts.user.user_artikel-laundry');
    }

}
