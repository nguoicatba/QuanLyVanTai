<?php

namespace App\Exports;

use App\Models\Shipper;
use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;

class ShipperExport implements FromCollection
{
    public function collection()
    {
        return Shipper::all();
    }
}