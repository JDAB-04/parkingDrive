<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Sede extends Model
{
    use HasFactory;
    protected $fillable = ['direccion', 'cupo', 'horarios', 'tarifa'];

    public function tickets(){
        return $this->hasMany(Ticket::class);
    }
}
