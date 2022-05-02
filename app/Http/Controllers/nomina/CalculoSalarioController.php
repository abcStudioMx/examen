<?php

namespace App\Http\Controllers\nomina;

use App\Http\Controllers\Controller;
use App\Models\User;

class CalculoSalarioController extends Controller
{
    public function show($myId){
        return view('nomina.index')
        ->with('miId',$myId);
    }

}
