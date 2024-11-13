<?php

namespace App\Http\Modules\Mesas\Controller;

use App\Http\Controllers\Controller;
use App\Http\Modules\Mesas\Repositories\MesasRepository;
use Illuminate\Http\Request;

class MesasController extends Controller
{

    public function __construct(private MesasRepository $mesasRepository)
    {
    }
    

    public function CrearMesas(Request $request)
    {
        $validatedData = $request->validate([
            'sillas' => 'required',
            'estado' => 'required',
        ]);
        
        $cat = $this->mesasRepository->CrearMesas($validatedData);
    }

    public function ListarMesas (Request $request) {
        try {
            $listar = $this->mesasRepository->ListarMesas();
            return response()->json($listar);
        } catch (\Throwable $th) {
            return response()->json($th->getMessage(), 500);
        }
    }
}
