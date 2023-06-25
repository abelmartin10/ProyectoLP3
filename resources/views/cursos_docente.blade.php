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
            <td
