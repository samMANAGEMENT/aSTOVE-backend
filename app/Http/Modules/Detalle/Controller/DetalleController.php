<?php

namespace App\Http\Modules\Detalle\Controller;

use App\Http\Controllers\Controller;
use App\Http\Modules\Detalle\Repositories\DetalleRepository;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class DetalleController extends Controller
{

    public function __construct(private DetalleRepository $detalleRepository)
    {
    }

    public function CrearDetalle(Request $request)
    {
        $validatedData = $request->validate([
            "orden_id" => "required",
            'plato_id' => 'required',
            'cantidad' => 'required',
            'precio_unitario' => 'required',
        ]);
        
        $cat = $this->detalleRepository->CrearDetalle($validatedData);
        return response()->json($cat, Response::HTTP_OK);
    }

    public function ListarDetalle (Request $request) {
        try {
            $listar = $this->detalleRepository->ListarDetalle();
            return response()->json($listar);
        } catch (\Throwable $th) {
            return response()->json($th->getMessage(), 500);
        }
    }
}
