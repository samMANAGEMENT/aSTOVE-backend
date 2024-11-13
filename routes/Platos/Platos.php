<?php

use App\Http\Modules\Platos\Controller\PlatosController;
use Illuminate\Support\Facades\Route;

Route::prefix('platos')->middleware('throttle:60,1')->group(function () {
    Route::controller(PlatosController::class)->group(function () {
        Route::post('CrearPlatos', 'CrearPlatos');
        Route::get('ListarPlatos',  'ListarPlatos');
        Route::put('actualizar/{id}', 'actualizarState');
        Route::delete('eliminar/{id}', 'eliminarState');
    });
});
