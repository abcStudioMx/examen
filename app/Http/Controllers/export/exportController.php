<?php

namespace App\Http\Controllers\export;

use App\Exports\UsersExport;
use App\Exports\UsersExportExcel;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Excel;

class exportController extends Controller
{

    public function index(){
    return view('export.index');
    }

    public function pdf(){
        return (new UsersExportExcel)->download('usuarios.pdf', Excel::DOMPDF);
    }

    public function excel(){
        return (new UsersExport)->download('usuarios.xlsx', Excel::XLSX);
    }

}
