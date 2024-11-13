<?php

namespace App\Http\Modules\Detalle\Repositories;

use App\Http\Modules\Detalle\Model\DetalleOrden;

class DetalleRepository{
    public function CrearDetalle(array $data)
    { 
        return DetalleOrden::create($data);
    }

    // public function ListarDetalle(){
    //    $listar = DetalleOrden::select('orden_id', 'plato_id', 'cantidad',  'precio_unitario')
    //    ->with(['OrdenRelation:id,user_id,mesa_id,estado', 'PlatosRelation:nombre,precio'])
    //    ->get();
    //    return $listar;
    // }

    public function ListarDetalle()
    {
        return DetalleOrden::with(['OrdenRelation:id,user_id,mesa_id,estado', 'PlatosRelation:nombre,precio']) // Asegúrate de que los nombres de las relaciones sean correctos
            ->select('orden_id', 'plato_id', 'cantidad', 'precio_unitario')
            ->get();
    }
}
