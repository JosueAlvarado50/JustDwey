<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carritos extends Model
{
    use HasFactory;
     //relacion uno a muchos inversa
     public function clientes(){
        return $this->belongsTo('App\Models\Clientes');
    }
    public function productos(){
        return $this->belongsToMany('App\Models\products');
    }

}
