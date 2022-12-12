<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ventas extends Model
{
    use HasFactory;
    protected $fillable = ['Monto_total'];
    public function producto_Carritos(){
        return $this->hasOne('App\Models\ProductoCarrito');
    }
    public function cliente(){
        return $this->hasOne('App\Models\Clientes');
    }
    public function metodoPago(){
        return $this->hasOne('App\Models\MetodoPago');
    }
}
