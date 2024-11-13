<?php

namespace App\Http\Modules\Ordenes\Controller;

use App\Http\Controllers\Controller;
use App\Http\Modules\Ordenes\Repositories\OrdenesRepository;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class OrdenesController extends Controller
{

    public function __construct(private OrdenesRepository $ordenesRepository)
    {
    }

    public function CrearOrden(Request $request)
    {
        $validatedData = $request->validate([
            "user_id" => "required",
            'mesa_id' => 'required',
            'estado' => 'required',
        ]);
        
        $cat = $this->ordenesRepository->CrearOrden($validatedData);
        return response()->json($cat, Response::HTTP_OK);
    }

    public function ListarOrden (Request $request) {
        try {
            $listar = $this->ordenesRepository->ListarOrden();
            return response()->json($listar);
        } catch (\Throwable $th) {
            return response()->json($th->getMessage(), 500);
        }
    }
}
