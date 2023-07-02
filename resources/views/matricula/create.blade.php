<form action="/matricula" method="POST">
    @csrf

    <div>
        <label for="facultad">Facultad:</label>
        <select name="facultad" id="facultad" onchange="actualizarEscuelaAcademicaOptions()">
            <option value="ingenieria">Ingeniería</option>
            <option value="ciencias_salud">Ciencias de la Salud</option>
            <option value="negocios">Negocios</option>
        </select>
    </div>

    <div>
    <label for="escuela_academica">Escuela Académica:</label>
    <select name="escuela_academica" id="escuela_academica">
       
        <option value="ingenieria_sistemas">Ingeniería de Sistemas</option>
        <option value="ingenieria_civil">Ingeniería Civil</option>
        <option value="arquitectura">Arquitectura</option>
        <option value="obstetricia">Obstetricia</option>
        <option value="enfermeria">Enfermería</option>
        <option value="primeros_auxilios">Primeros Auxilios</option>
        <option value="administracion">Administración</option>
        <option value="economia">Economía</option>
        <option value="contabilidad">Contabilidad</option>
    </select>
    </div>

    <div>
    <label for="curso">Curso:</label>
    <select name="curso" id="curso">
        
    </select>
    </div>

   

    <button type="submit">Enviar</button>
</form>

<script>
    const facultadSelect = document.getElementById('facultad');
    //const escuelaAcademicaSelect = document.getElementById('escuela_academica');

    
    function actualizarEscuelaAcademicaOptions() {
        const selectedFacultad = facultadSelect.value;
        escuelaAcademicaSelect.innerHTML = '';

        if (selectedFacultad === 'ingenieria') {
            
            const opciones = ['Ingeniería de Sistemas', 'Ingeniería Civil', 'Arquitectura'];

            opciones.forEach((opcion) => {
                const option = document.createElement('option');
                option.text = opcion;
                option.value = opcion.toLowerCase().replace(/\s+/g, '_');
                escuelaAcademicaSelect.add(option);
            });
        } else if (selectedFacultad === 'ciencias_salud') {
            
            const opciones = ['Obstetricia', 'Enfermería', 'Primeros Auxilios'];

            opciones.forEach((opcion) => {
                const option = document.createElement('option');
                option.text = opcion;
                option.value = opcion.toLowerCase().replace(/\s+/g, '_');
                escuelaAcademicaSelect.add(option);
            });
        } else if (selectedFacultad === 'negocios') {
         
            const opciones = ['Administración', 'Economía', 'Contabilidad'];

            opciones.forEach((opcion) => {
                const option = document.createElement('option');
                option.text = opcion;
                option.value = opcion.toLowerCase().replace(/\s+/g, '_');
                escuelaAcademicaSelect.add(option);
            });
        }
    }


    /* */

    function actualizarCursosOptions() {
        const escuelaAcademicaSelect = document.getElementById('escuela_academica');
        const cursoSelect = document.getElementById('curso');
        const selectedEscuelaAcademica = escuelaAcademicaSelect.value;
        cursoSelect.innerHTML = '';

        
        const cursosPorEscuelaAcademica = {
            ingenieria_sistemas: ['Ingeniería de Sistemas 1', 'Ingeniería de Sistemas 2', 'Ingeniería de Sistemas 3'],
            ingenieria_civil: ['Ingeniería Civil 1', 'Ingeniería Civil 2', 'Ingeniería Civil 3'],
            arquitectura: ['Arquitectura 1', 'Arquitectura 2', 'Arquitectura 3'],
            obstetricia: ['Obstetricia 1', 'Obstetricia 2', 'Obstetricia 3'],
            enfermeria: ['Enfermería 1', 'Enfermería 2', 'Enfermería 3'],
            primeros_auxilios: ['Primeros Auxilios 1', 'Primeros Auxilios 2', 'Primeros Auxilios 3'],
            administracion: ['Administración 1', 'Administración 2', 'Administración 3'],
            economia: ['Economía 1', 'Economía 2', 'Economía 3'],
            contabilidad: ['Contabilidad 1', 'Contabilidad 2', 'Contabilidad 3']
        };

        if (selectedEscuelaAcademica) {
            
            const cursos = cursosPorEscuelaAcademica[selectedEscuelaAcademica];

            cursos.forEach((curso) => {
                const option = document.createElement('option');
                option.text = curso;
                option.value = curso.toLowerCase().replace(/\s+/g, '_');
                cursoSelect.add(option);
            });
        }
    }

    
    actualizarCursosOptions();

    
    const escuelaAcademicaSelect = document.getElementById('escuela_academica');
    escuelaAcademicaSelect.addEventListener('change', actualizarCursosOptions);
    
</script>











