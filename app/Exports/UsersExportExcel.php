<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class UsersExportExcel implements FromCollection,ShouldAutoSize
{
    use Exportable;

    public function collection()
    {
        return User::All()->except('id','created_at','profile_photo_path');
    }
}
