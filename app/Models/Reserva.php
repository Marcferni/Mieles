<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Reserva extends Model
{
    //
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'id',
        'direccion',
        'fecha',
        'id_user'
    ];

    public function relacion_Reserver() {
        return $this->belongsTo(User::class,'id_user');
    }

    public function relacion_Reserducto() {
        return $this->belongsToMany(Producto::class,'pedidos','id_reserva','id_producto');
    }
}