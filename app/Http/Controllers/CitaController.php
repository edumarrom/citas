<?php

namespace App\Http\Controllers;

use App\Models\Compania;
use App\Models\Especialidad;
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
        return view('citas.create-especialidad', [
            'compania' => $compania,
            'especialidades' => Especialidad::all(),
        ]);
    }

    public function createEspecialista(Compania $compania, Especialidad $especialidad)
    {
        return "Creando cita: Toca seleccionar especialista.";
    }
}
