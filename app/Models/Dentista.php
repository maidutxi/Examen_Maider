<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dentista extends Model
{
    protected $table='dentistas';
    public function clientes(){ 
        return $this->hasMany(Clientes::class);
    }
}
