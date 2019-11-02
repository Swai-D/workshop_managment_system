<?php

namespace App\Exports;

use App\Store;
use Maatwebsite\Excel\Concerns\FromCollection;

class StoresExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Store::all();
    }
}
