<?php

namespace App\Exports;

use App\Models\Producto;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithColumnWidths;


class ProdsExport implements FromCollection, WithColumnWidths
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Producto::all();
    }

    public function columnWidths(): array
    {
        return [
            'A' => 8,
            'B' => 10,
            'C' => 50,
            'D' => 12,          
        ];
    }

}

