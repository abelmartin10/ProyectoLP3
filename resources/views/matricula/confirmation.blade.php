
@extends('layouts.app')

@section('content')
    <h1>Confirmación de Matrícula</h1>
    <p>¡La matrícula se ha guardado correctamente!</p>
    <p>Detalles de la matrícula:</p>
    <ul>
        <li><strong>Facultad:</strong> {{ $matricula->facultad }}</li>
        <li><strong>Escuela Académica:</strong> {{ $matricula->escuela_academica }}</li>
        <li><strong>Curso:</strong> {{ $matricula->curso }}</li>
        
    </ul>
@endsection
