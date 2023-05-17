<?php

namespace App\Http\Controllers;

use App\Exports\ExportLaundries;
use Carbon\Carbon;
use App\Models\Laundry;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;

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
        $laundryCount = Laundry::count();
        $siapDiambilCount = Laundry::where('statuslaundry', 'siap diambil')->count();
        $prosesCount = Laundry::where('statuslaundry', 'proses')->count();
        $sudahDiambilCount = Laundry::where('statuslaundry', 'sudahdiambil')->count();

        $laundry = Laundry::all();
        return view('layouts.admin.admin_data-laundry', compact('laundry', 'laundryCount', 'siapDiambilCount', 'prosesCount', 'sudahDiambilCount'));
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

    public function edit_form($id)
    {
        $laundry = Laundry::find($id);
        return view('layouts.form.edit-form-laundry', compact('laundry'));
    }

    public function update(Request $request, $id)
    {
        if(empty($request->file('image'))) {
            $laundry = Laundry::find($id);

            $laundry->update([
                'statuslaundry' => $request->statuslaundry,
            ]);
            return redirect('/admin_tambah_laundry');
            } else {
                $laundry = Laundry::find($id);
                $laundry->update([
                'statuslaundry' => $request->statuslaundry,
                'image' => $request->file('image')->store('laundry'),
            ]);
            return redirect('/admin_tambah_laundry');
            }
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

    public function destroy(Laundry $laundry, $id)
{
    $laundry = Laundry::find($id);

    if ($laundry->image) {
        Storage::delete($laundry->image); // Hapus gambar jika tersedia
    }

    $laundry->delete(); // Hapus data

    return redirect('/admin_tambah_laundry');
}

public function export()
    {
        return Excel::download(new ExportLaundries, 'DataLaundry.xlsx');
    }


}
