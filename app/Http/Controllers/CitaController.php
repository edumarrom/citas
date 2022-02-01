<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CitaController extends Controller
{
    public function index()
    {
        return 'Hola';
    }

    public function create()
    {
        return 'Creando cita!';
    }
}
