<?php

namespace App\Http\Modules\Detalle\Model;

use App\Http\Modules\Ordenes\Model\Ordenes;
use App\Http\Modules\Platos\Model\Platos;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleOrden extends Model
{
    use HasFactory;

    protected $table = "detalles_orden";

    protected $fillable = ['orden_id', 'plato_id', 'cantidad', 'precio_unitario'];

    public function OrdenRelation() {
        return $this->belongsTo(Ordenes::class,  'orden_id');
    }

    public function PlatosRelation() {
        return $this->belongsTo( Platos::class,'plato_id');
    }
}
