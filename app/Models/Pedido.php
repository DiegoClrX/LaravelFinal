<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Restaurante;
use App\Models\Plato;

class Pedido extends Model
{
    use HasFactory;


    public function platos(){
        return $this->belongsToMany(Plato::class, 'plato_pedido', 'platos_id', 'pedido_id');
    }

    // public function repartidor(){
    //     return $this->belongsToMany(Repartidor::class);
    // }

    public function cliente(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function restaurante(){
        return $this->belongsTo(Restaurante::class);
    }
}
