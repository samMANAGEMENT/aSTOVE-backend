<?php

namespace App\Http\Modules\Platos\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Http\Modules\Detalle\Model\DetalleOrden;
use Illuminate\Database\Eloquent\Model;

class Platos extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'descripcion', 'precio'];

    public function detalleOrden()
    {
        return $this->hasMany(DetalleOrden::class, 'plato_id');
    }
}
