<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function home()
    {
        return view('layouts.landing-page');
    }

    public function user_data_laundry()
    {
        return view('layouts.user_data-laundry');
    }
}
