<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Laundry;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('is_admin');
    }

    //VIEW
    //ADMIN VIEW
    public function admin_data_laundry()
    {
        $laundry = Laundry::all();
        return view('layouts.admin.admin_data-laundry', compact('laundry'));
    }

    public function admin_tambah_laundry()
    {
        
        $laundry = Laundry::all();
        return view('layouts.admin.admin_tambah-laundry', compact('laundry'));
    }

    //FORM VIEW
    public function form_laundry()
    {
        return view('layouts.form.form-laundry');
    }

    

    public function store(Request $request)
    {
        $laundry = new Laundry();
        $laundry->name = $request->name;
        $laundry->tanggal = date('Y-m-d', strtotime($request->tanggal));
        $laundry->jenislaundry = $request->jenislaundry;
        $laundry->typelaundry = $request->typelaundry;
        $laundry->statuslaundry = $request->statuslaundry;

        if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('laundry');
        $laundry->image = $imagePath;
    }

        $laundry->save();

        return redirect('/admin_tambah_laundry');
    }

    // public function show($param)
    // {
        
    // }

    // public function update($key)
    // {
        
    // }

    // public function destroy($key)
    // {
        
    // }

}
