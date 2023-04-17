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
        return view('layouts.user.user_data-laundry');
    }

    public function user_artikel_laundry()
    {
        return view('layouts.user.user_artikel-laundry');
    }

}
