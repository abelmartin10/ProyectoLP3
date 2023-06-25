<table>
    <thead>
        <tr>
            <th>Código del curso</th>
            <th>Nombre del curso</th>
            <th>Escuela Profesional</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($cursos as $curso)
        <tr>
            <td>{{ $curso->codigo }}</td>
            <td>{{ $curso->nombre }}</td>
            <td>{{ $curso->escuela }}</td>
            <td>
                
                <a href="{{ route('estudiante.inscribir', ['id' => $curso->id]) }}">Inscribirse</a>
                <a href="{{ route('curso.detalle', ['id' => $curso->id]) }}">Detalles</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
