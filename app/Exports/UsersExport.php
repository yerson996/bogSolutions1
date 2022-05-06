<?php

namespace App\Exports;

use App\Models\Cliente;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithColumnWidths;

class UsersExport implements FromCollection, WithColumnWidths
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Cliente::all();
    }

    public function columnWidths(): array
    {
        return [
            'A' => 18,
            'B' => 5,
            'C' => 14,
            'D' => 24,
            'E' => 24,  
            'F' => 24,      
            'G' => 24,
            'H' => 58,     
            'I' => 42,   
            'J' => 15,
            'K' => 20,
            'L' => 38,      
        ];
    }
}
