<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckRoleController extends Controller
{

    public function check_role()
    {
        $role = Auth::user()->role;

        if ($role == 'admin') {
            return redirect()->action([AdminController::class, 'admin_data_laundry']);
        } else {
            return redirect()->action([UserController::class, 'user_data_laundry']);
        }
    }
}
