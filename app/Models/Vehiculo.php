<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    protected $fillable = ['tipo', 'tarifa_id', 'placa', 'ingreso', 'salida'];

    public function tarifa()
    {
        return $this->belongsTo(Tarifa::class);
    }

    public function facturas(){
        return $this->hasMany(Factura::class);
    }

    public function tickets(){
        return $this->hasMany(Ticket::class);
    }

}
