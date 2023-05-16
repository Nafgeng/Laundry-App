<?php

namespace App\Exports;

use App\Models\Laundry;
use Maatwebsite\Excel\Concerns\FromCollection;

class ExportLaundries implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Laundry::all();
    }
}
