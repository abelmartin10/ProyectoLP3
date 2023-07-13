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
            // Agrega aquí las reglas de validación para los demás campos del formulario
        ]);

        // Crear una nueva instancia de Matricula
        $matricula = new Matricula();
        $matricula->facultad = $request->input('facultad');
        $matricula->escuela_academica = $request->input('escuela_academica');
        $matricula->curso = $request->input('curso');
        // Asigna los valores de los demás campos de la matrícula

        // Guardar la matrícula en la base de datos
        $matricula->save();

        // Redireccionar a una página de confirmación o a otra vista
        return redirect()->route('matricula.confirmation');
    }

    // Otros métodos del controlador...
}
