<?php

use App\Http\Modules\Detalle\Controller\DetalleController;
use Illuminate\Support\Facades\Route;

Route::prefix('detalle')->middleware('throttle:60,1')->group(function () {
    Route::controller(DetalleController::class)->group(function () {
        Route::post('CrearDetalle', 'CrearDetalle');
        Route::get('ListarDetalle',  'ListarDetalle');
        Route::put('actualizar/{id}', 'actualizarState');
        Route::delete('eliminar/{id}', 'eliminarState');
    });
});
