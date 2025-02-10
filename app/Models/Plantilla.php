<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class plantilla extends Model
{
    use HasFactory;

    protected $fillable = [
        "categoria",
        "id_club",
    ];

    public function club(){
        return $this->belongsTo(Club::class, "id_club", "id");
    }
}
