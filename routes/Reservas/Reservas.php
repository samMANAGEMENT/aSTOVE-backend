<?php

use App\Http\Modules\Reservas\Controller\ReservasController;
use Illuminate\Support\Facades\Route;

Route::prefix('reservas')->middleware('throttle:60,1')->group(function () {
    Route::controller(ReservasController::class)->group(function () {
        Route::post('CrearReserva', 'CrearReserva');
        Route::get('ListarReserva',  'ListarReserva');
        Route::put('actualizar/{id}', 'actualizarState');
        Route::delete('eliminar/{id}', 'eliminarState');
    });
});
