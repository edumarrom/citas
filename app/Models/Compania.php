<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compania extends Model
{
    use HasFactory;

    // Una compania puede pertenecer a muchos usuarios
    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    // Una compañia puede pertenecer a muchos especialistas
    public function especialistas()
    {
        return $this->belongsToMany(Especialista::class);
    }

    // Una compañia tiene muchas citas
    public function citas()
    {
        return $this->hasMany(Cita::class);
    }
}
