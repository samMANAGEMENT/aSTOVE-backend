<?php

use App\Http\Modules\Mesas\Controller\MesasController;
use Illuminate\Support\Facades\Route;

Route::prefix('mesas')->middleware('throttle:60,1')->group(function () {
    Route::controller(MesasController::class)->group(function () {
        Route::post('CrearMesas', 'CrearMesas');
        Route::get('ListarMesas',  'ListarMesas');
        Route::put('actualizar/{id}', 'actualizarState');
        Route::delete('eliminar/{id}', 'eliminarState');
    });
});
