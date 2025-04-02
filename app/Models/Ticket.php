<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Ticket extends Model
{
    use HasFactory;
    protected $fillable = ['vehiculo_id', 'sede_id', 'h_ingreso', 'fecha'];

    public function Vehiculo(){
        return $this->belongsTo(Vehiculo::class);
    }

    public function Sede(){
        return $this->belongsTo(Sede::class);
    }
}
