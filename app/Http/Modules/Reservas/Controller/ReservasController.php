<?php

namespace App\Http\Modules\Reservas\Controller;

use App\Http\Controllers\Controller;
use App\Http\Modules\Reservas\Repositories\ReservasRepository;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ReservasController extends Controller
{

    public function __construct(private ReservasRepository $reservasRepository)
    {
    }

    public function CrearReserva(Request $request)
    {
        $validatedData = $request->validate([
            "usuario_id" => "required",
            'mesa_id' => 'required',
            'fecha_reserva' => 'required',
            'estado' => 'required',
            'canal' => 'required',
        ]);
        
        $cat = $this->reservasRepository->CrearReserva($validatedData);
        return response()->json($cat, Response::HTTP_OK);
    }

    public function ListarReserva (Request $request) {
        try {
            $listar = $this->reservasRepository->ListarReserva();
            return response()->json($listar);
        } catch (\Throwable $th) {
            return response()->json($th->getMessage(), 500);
        }
    }
}
