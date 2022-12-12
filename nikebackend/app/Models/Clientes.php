<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    use HasFactory;
    protected $fillable = ['email','password','nombre', 'telefono','fecha_nac','region','ciudad','domicilio', 'codigo_postal'];
    
    public function carritos(){
        return $this->hasMany('App\Models\Carrito');
    }
}
