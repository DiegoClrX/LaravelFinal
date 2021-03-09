<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plato extends Model
{
    use HasFactory;

    public function restaurante(){
        return $this->hasMany(Restaurante::class);
    }

    public function pedidos(){
        return $this->belongsToMany(Pedido::class, 'plato_pedido', 'platos_id', 'pedido_id');
    }
}
