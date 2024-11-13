<?php

namespace App\Http\Modules\Mesas\Repositories;

use App\Http\Modules\Mesas\Model\Mesas;

class MesasRepository{
    public function CrearMesas(array $data)
    { 
        return Mesas::create($data);
    }

    public function ListarMesas()
    {
        return Mesas::select('sillas', 'estado')->paginate(10);
    }
}
