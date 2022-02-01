<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Psy\CodeCleaner\FunctionContextPass;

class Especialidad extends Model
{
    use HasFactory;
    protected $table = 'especialidades';

    // Una especialidad tiene muchos especialistas
    public function especialistas()
    {
        return $this->hasMany(Especialista::class);
    }
}
