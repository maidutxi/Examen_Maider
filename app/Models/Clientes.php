<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    protected $table='clientes';
    public function dentista(){ 
        return $this->belongsTo(Dentista::class);
    }
}
