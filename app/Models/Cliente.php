<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table='clientes';
    public function dentista(){ 
        return $this->belongsTo(Dentista::class);
    }
}
