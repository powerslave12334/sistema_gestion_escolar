<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Personals extends Model
{
    protected $fillable = [
        'usuario_id',
        'tipo',
        'nombres',
        'apellidos',
        'ci',
        'fecha_nacimiento',
        'direccion',
        'telefono',
        'profesion',
    ];

    public function usuario()
    {
        return $this->belongsTo(User::class);
    }
}
