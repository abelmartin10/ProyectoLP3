<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Matricula;

class MatriculaController extends Controller
{
    public function store(Request $request)
    {
        // Validar los datos de la matrícula
        $request->validate([
            'facultad' => 'required',
            'escuela_academica' => 'required',
            'curso' => 'required',
            
        ]);

        
        $matricula = new Matricula();
        $matricula->facultad = $request->input('facultad');
        $matricula->escuela_academica = $request->input('escuela_academica');
        $matricula->curso = $request->input('curso');
        
        $matricula->save();

        return redirect()->route('matricula.confirmation');
    }

    
    public function cursosDisponibles()
    {
        $cursos = Curso::all(); // Obtener todos los cursos desde la base de datos

        return view('matricula.cursos_disponibles', compact('cursos'));
    }
}
