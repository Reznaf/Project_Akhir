<?php

namespace App\Exports;

use App\Models\obat;
use Maatwebsite\Excel\Concerns\FromCollection;

class UsersExports implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return obat::all();
    }
}
