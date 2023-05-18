<?php

namespace App\Http\Controllers;

use App\Models\Laundry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('is_user');
    }

    //user view
    public function user_data_laundry(Request $request)
    {
    $keyword = $request->input('search');

    $siapDiambilLaundry = Laundry::where('statuslaundry', 'siap diambil')
        ->where('name', 'like', '%' . $keyword . '%')
        ->get();

    $prosesLaundry = Laundry::where('statuslaundry', 'proses')
        ->where('name', 'like', '%' . $keyword . '%')
        ->get();

    $sudahDiambilLaundry = Laundry::where('statuslaundry', 'sudahdiambil')
        ->where('name', 'like', '%' . $keyword . '%')
        ->get();

    return view('layouts.user.user_data-laundry', compact('siapDiambilLaundry', 'prosesLaundry', 'sudahDiambilLaundry', 'keyword'));
    }


    public function user_artikel_laundry()
    {
        return view('layouts.user.user_artikel-laundry');
    }


    //-------- DETAIL ARTIKEL VIEWW --------//

    public function user_detail_artikel()
    {
        return view('layouts.user.detail-artikel.detail-artikel');
    }

}
