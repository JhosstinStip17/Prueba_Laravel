<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jugador extends Model
{
    use HasFactory;

    protected $table = "jugadores";
    protected $fillable = [
        "nombre",
        "edad",
        "posicion",
        "id_plantilla",
    ];

    public function plantilla()

    {
        return $this->belongsTo(Plantilla::class, "id_plantilla", "id");
    }
}
