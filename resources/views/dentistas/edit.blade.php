<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar dentista</title>
</head>
<body>
    <h1>Editar Dentista</h1>

    
    <form action="/dentistas/update/{{ $dentistas->id }}" method="POST">
        @csrf
        @method('PUT') 
        
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" value="{{ $dentistas->nombre }}" required>

        <label for="apellido">Apellido:</label>
        <input type="text" name="apellido" id="apellido" value="{{ $dentistas->apellido }}" required>

        <label for="dni">DNI:</label>
        <input type="text" name="dni" id="dni" value="{{ $dentistas->dni }}" required>

        <label for="dni">Fecha nacimiento:</label>
        <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" value="{{ $dentistas->fecha_nacimiento }}" required>
        
        <label for="en_vacaciones">En vacaciones:</label>
        <input type="text" name="en_vacaciones" id="en_vacaciones" value="{{ $dentistas->en_vacaciones }}" required>
        
        <button type="submit">Actualizar dentista</button>
    </form><br>

    
    <a href="/dentistas/create">Formulario para añadir tarea</a>
    <a href="/dentistas/index">Volver a Lista Tareas</a>
</body>
</html>
