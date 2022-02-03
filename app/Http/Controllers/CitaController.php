<?php

namespace App\Http\Controllers;

use App\Models\Compania;
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
        return view('citas.create', [
            'companias' => Compania::all(),
            'companias_usuario' => Auth::user()->paciente->companias,
        ]);
    }

    public function createEspecialidad(Compania $compania)
    {
        return 'creando cta: especialidad';
        /* return view('citas.create-especialidad', [
            'compania' => $compania,
            'especialidades' => Especialidad::all(),
        ]); */
    }
}
