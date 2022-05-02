<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\empleados\empleadosController;
use App\Http\Controllers\export\exportController;
use App\Http\Controllers\nomina\CalculoSalarioController;
use App\Http\Controllers\permisos\permisosController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',

    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');})->name('dashboard');
    Route::get('/empleados',[empleadosController::class,'index'])->name('empleados');
    Route::get('/nomina/{id?}',[CalculoSalarioController::class,'show'])->name('nomina.index');
    Route::get('/empleados/{id?}',[empleadosController::class,'show'])->name('empleados.show');
    Route::post('/empleados',[empleadosController::class,'store'])->name('empleados.store');

    Route::get('/export',[exportController::class,'index'])->name('export');
    Route::get('/pdf',[exportController::class,'pdf'])->name('pdf');
    Route::get('/excel',[exportController::class,'excel'])->name('excel');

    Route::resource('/permisos',permisosController::class)->names('permisos');
});
