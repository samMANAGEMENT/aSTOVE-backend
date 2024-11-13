<?php

namespace App\Http\Modules\Reservas\Repositories;

use App\Http\Modules\Reservas\Model\Reservas;

class ReservasRepository{
    public function CrearReserva(array $data)
    { 
        return Reservas::create($data);
    }

    public function ListarReserva(){
        $listar = Reservas::select('usuario_id', 'mesa_id', 'fecha_reserva',  'estado', 'canal')
        ->with(['UserRelation:id,name,email', 'MesaRelation:id,sillas,estado'])
        ->get();
        return $listar;
    }
}
