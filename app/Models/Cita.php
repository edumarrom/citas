<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    use HasFactory;

    // Una cita tiene un usuario (nullable)
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Toda cita tiene un especialista
    public function especialista()
    {
        return $this->belongsTo(Especialista::class);
    }

    // Una cita tiene una compania (nullable)
    public function compania()
    {
        return $this->belongsTo(Compania::class);
    }
}
