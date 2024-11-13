<?php

namespace App\Http\Modules\Reservas\Model;

use App\Http\Modules\Mesas\Model\Mesas;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservas extends Model
{
    use HasFactory;

    protected $fillable = ['usuario_id', 'mesa_id', 'fecha_reserva', 'estado', 'canal'];

    public function UserRelation() {
        return $this->belongsTo(User::class,  'usuario_id');
    }

    public function MesaRelation() {
        return $this->belongsTo( Mesas::class,'mesa_id');
    }
}
