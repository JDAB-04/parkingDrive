<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tarifa extends Model
{
    protected $fillable = ['valor_minuto' , 'tipo_vehiculo'];

    public function vehiculos(){
    return $this->hasMany(Vehiculo::class);
    }
}
