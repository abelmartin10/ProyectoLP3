<form action="/matricula" method="POST">
    @csrf

    <div>
        <label for="facultad">Facultad:</label>
        <input type="text" name="facultad" id="facultad">
    </div>

    <div>
        <label for="escuela_academica">Escuela Académica:</label>
        <input type="text" name="escuela_academica" id="escuela_academica">
    </div>

    <div>
        <label for="curso">Curso:</label>
        <select name="curso" id="curso">
            <option value="curso1">Curso 1</option>
            <option value="curso2">Curso 2</option>
            <option value="curso3">Curso 3</option>
            <!-- Agrega más opciones de cursos según tus necesidades -->
        </select>
    </div>

    <!-- Agrega aquí los otros campos del formulario -->

    <button type="submit">Enviar</button>
</form>
