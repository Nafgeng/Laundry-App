<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataController extends Controller
{
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

