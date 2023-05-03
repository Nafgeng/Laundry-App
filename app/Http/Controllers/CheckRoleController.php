<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckRoleController extends Controller
{
    public function index() {
        $role = Auth::user()->role;

        if ($role == 'admin') {
            return view('layouts.admin.admin_data-laundry');
        } else {
            return view('layouts.user.user_data-laundry');
        }

    }
}
