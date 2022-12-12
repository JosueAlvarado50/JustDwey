<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    protected $fillable = ['modelo','tipo','precio','descripcion','color','talla_26', 'talla_27','img_model_1','img_model_2','img_model_3','img_1','img_2','img_3','img_4','img_5','img_6','img_7','img_8','img_9'];

    public function carritos(){
        return $this->belongsToMany('App\Models\Carritos');
    }
    public function categorias(){
        return $this->hasOne('App\Models\Categorias');
    }

}
