<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Periodo extends Model
{
    protected $fillable = [
        'nombre', 
        'gestion_id',
    ];

    public function gestion()
    {
        return $this->belongsTo(Gestion::class);
    }
}
