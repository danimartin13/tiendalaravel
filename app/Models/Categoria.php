<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{   
    protected $fillable = ['estado'];

    public function productos(){
        return $this->hasMany('app\Producto');
    }
}
