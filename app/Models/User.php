<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Symfony\Component\CssSelector\Node\FunctionNode;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // Un usuario puede pertenecer a muchas compañías
    public function companias()
    {
        return $this->belongsToMany(User::class);
    }

    // Un usuario tiene muchas citas
    public function citas()
    {
        return $this->hasMany(Cita::class);
    }

    //Muchos usuarios pueden ser pacientes
    public function pacientes()
    {
        return $this->hasMany(Paciente::class);
    }

    public function administradores()
    {
        return $this->hasMany(Administrador::class);
    }

    public function especialistas()
    {
        return $this->hasMany(Especialista::class);
    }
}
