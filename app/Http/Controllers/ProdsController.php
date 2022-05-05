<?php

namespace App\Http\Controllers;

use App\Exports\ProdsExport;
use Maatwebsite\Excel\Facades\Excel;

class ProdsController extends Controller 
{
    public function export() 
    {
        return Excel::download(new ProdsExport, 'Productos.xlsx');
    }
}
