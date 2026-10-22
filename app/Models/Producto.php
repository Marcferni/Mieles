<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Database\Eloquent\SoftDeletes;

class Producto extends Model
{
    //
    use HasFactory;
    //use SoftDeletes;

    protected $fillable = [
        'id',
        'nombre',
        'descripcion',
        'imagen',
    ];

    public function relacion_Proderva() {
        return $this->belongsToMany(Reserva::class,'pedidos','id_producto','id_reserva');
    }
}