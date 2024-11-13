<?php

use App\Http\Modules\Ordenes\Controller\OrdenesController;
use Illuminate\Support\Facades\Route;

Route::prefix('orden')->middleware('throttle:60,1')->group(function () {
    Route::controller(OrdenesController::class)->group(function () {
        Route::post('CrearOrden', 'CrearOrden');
        Route::get('ListarOrden',  'ListarOrden');
        Route::put('actualizar/{id}', 'actualizarState');
        Route::delete('eliminar/{id}', 'eliminarState');
    });
});
