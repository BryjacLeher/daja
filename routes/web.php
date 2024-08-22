<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadoController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Grupo de rutas para Empleados

    // Rutas de Empleados
    Route::resource('empleados', EmpleadoController::class)->except(['show'])->names([
        'index' => 'empleados.index',
        'create' => 'empleados.create',
        'store' => 'empleados.store',
        'edit' => 'empleados.edit',
        'update' => 'empleados.update',
        'destroy' => 'empleados.destroy',
    ]);

    // Ruta para buscar empleados por nombre
    Route::get('empleados/buscar', [EmpleadoController::class, 'search'])->name('empleados.search');
    
    // Ruta para generar QR y PDF (opcional si lo necesitas fuera del registro)
    Route::get('empleados/generar-pdf/{id}', [EmpleadoController::class, 'generateQRCodeAndPDF'])->name('empleados.generar-pdf');
    // Ruta para generar QR y PDF (opcional si lo necesitas fuera del registro)
    Route::get('empleados/qruwu{id}', [EmpleadoController::class, 'qr'])->name('empleados.qrg');
    



Route::get('/', function () {
    return view ('layouts.general');
});
