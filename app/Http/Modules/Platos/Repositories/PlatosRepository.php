<?php

namespace App\Http\Modules\Platos\Repositories;

use App\Http\Modules\Platos\Model\Platos;

class PlatosRepository{
    public function CrearPlatos(array $data)
    { 
        return Platos::create($data);
    }

    public function ListarPlatos()
    {
        return Platos::select('nombre', 'descripcion', 'precio')->paginate(10);
    }
}
