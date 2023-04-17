<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function home()
    {
        return view('layouts.landing-page');
    }

    //form view
    public function form_laundry()
    {
        return view('layouts.form.form-laundry');
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

    //admin view
    public function admin_data_laundry()
    {
        return view('layouts.admin.admin_data-laundry');
    }

    public function admin_tambah_laundry()
    {
        return view('layouts.admin.admin_tambah-laundry');
    }

}
