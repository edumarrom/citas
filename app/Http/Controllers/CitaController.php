<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CitaController extends Controller
{
    public function index()
    {
        $citas = Auth::user()->paciente->citas;

        return view('citas.index', [
            'citas' => $citas,
        ]);
    }

    public function create()
    {
        return 'Creando cita!';
    }
}
