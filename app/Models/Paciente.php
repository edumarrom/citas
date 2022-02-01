<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Un usuario puede pertenecer a muchas compañías
    public function companias()
    {
        return $this->belongsToMany(Compania::class);
    }

    // Un usuario tiene muchas citas
    public function citas()
    {
        return $this->hasMany(Cita::class);
    }
}
