<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Factura extends Model
{
   use HasFactory;
   protected $fillable = ['vehiculo_id','tarifa','h_ingreso', 'h_salida','fecha'];

   public function vehiculo(){
        return $this->belongsTo(Vehiculo::class);
   }
}
