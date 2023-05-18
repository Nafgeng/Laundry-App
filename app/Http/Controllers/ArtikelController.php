<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function form_artikel()
    {
        return view('layouts.form.form-artikel');
    }
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Artikel::create([
            'judul' => $request->judul,
            'content' => $request->content,
            'image' => $request->file('image')->store('laundry'),
        ]);
        return redirect('/admin_tambah_laundry');
    }

    /**
     * Display the specified resource.
     */
    public function show(Artikel $artikel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Artikel $artikel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Artikel $artikel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Artikel $artikel)
    {
        //
    }
}
