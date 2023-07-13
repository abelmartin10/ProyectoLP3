@extends('layouts.app')

@section('content')
    <h1>Cursos Disponibles</h1>
    <ul>
        @foreach ($cursos as $curso)
            <li>{{ $curso->nombre }}</li>
        @endforeach
    </ul>
@endsection