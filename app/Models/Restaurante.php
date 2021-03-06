<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurante extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre', 'ciudad', 'direccion', 'telefono', 'latitud', 'longitud'
    ];

    public function pedidos(){
        return $this->hasMany(Pedido::class);
    }
}
