<?php

namespace App\Http\Modules\Platos\Controller;

use App\Http\Controllers\Controller;
use App\Http\Modules\Platos\Repositories\PlatosRepository;
use Illuminate\Http\Request;

class PlatosController extends Controller
{
    public function __construct(private PlatosRepository $platosRepository)
    {
    }

    public function CrearPlatos(Request $request)
    {
        $validatedData = $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'precio' => 'required',
        ]);
        
        $cat = $this->platosRepository->CrearPlatos($validatedData);
    }

    public function ListarPlatos (Request $request) {
        try {
            $listar = $this->platosRepository->ListarPlatos();
            return response()->json($listar);
        } catch (\Throwable $th) {
            return response()->json($th->getMessage(), 500);
        }
    }
}
