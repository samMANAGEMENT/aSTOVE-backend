<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

require  __DIR__.'/Mesas/Mesas.php';
require __DIR__.'/Platos/Platos.php';
require __DIR__.'/Ordenes/Ordenes.php';
require __DIR__.'/Reservas/Reservas.php';
require __DIR__.'/Detalle/Detalle.php';