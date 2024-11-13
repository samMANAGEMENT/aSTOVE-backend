<?php

namespace App\Http\Modules\Ordenes\Repositories;

use App\Http\Modules\Ordenes\Model\Ordenes;

class OrdenesRepository{
    public function CrearOrden(array $data)
    { 
        return Ordenes::create($data);
    }

    public function ListarOrden(){ //TRAE DATOS DEL PROYECT Y RELACIONES
        $listar = Ordenes::select('user_id', 'mesa_id',  'estado')
        ->with(['MesaRelation:id,sillas,estado',  'UserRelation:id,name,email'])
        ->get();
        return $listar;
    }
}
