<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    //VIEW
    //ADMIN VIEW
    public function admin_data_laundry()
    {
        return view('layouts.admin.admin_data-laundry');
    }

    public function admin_tambah_laundry()
    {
        return view('layouts.admin.admin_tambah-laundry');
    }

    //FORM VIEW
    public function form_laundry()
    {
        return view('layouts.form.form-laundry');
    }

    //DATA
    private $datalist = [
        'nama' => 'dzikry',
        'alamat' => 'abu-bau',
        'status' => 'pelajar'
    ];

    public function index ()
    {
        if (request()->search) {
            return $this->datalist[request()->search];
        }
        return $this->datalist;
    }

    public function store()
    {
        $this->datalist[request()->label] = request()->datas;
        return $this->datalist;
    }

    public function show($param)
    {
        return $this->datalist[$param];
    }

    public function update($key)
    {
        $this->datalist[$key] = request()->data;
        return $this->datalist;
    }

    public function destroy($key)
    {
        unset($this->datalist[$key]);
        return $this->datalist;
    }

}
