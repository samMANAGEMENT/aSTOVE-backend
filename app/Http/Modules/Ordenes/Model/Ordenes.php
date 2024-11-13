<?php

namespace App\Http\Modules\Ordenes\Model;

use App\Http\Modules\Mesas\Model\Mesas;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Ordenes extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'mesa_id', 'estado'];

    public function UserRelation() {
        return $this->belongsTo(User::class,  'user_id');
    }

    public function MesaRelation() {
        return $this->belongsTo( Mesas::class,'mesa_id');
    }
}
