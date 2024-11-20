<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dentistas</title>
</head>
<body>
    <h1>Añadir dentista</h1>
    <form action="/dentistas/store" method="post">
        @csrf 
        @if($errors->any()) <!--si hay algun error listamelos del validate-->
            
            <ul>
                @foreach ($errors->all() as $error) 
                    <li>{{$error}}</li>
                @endforeach
            </ul>
            @endif
        <input type="text" name="nombre" placeholder="Nombre dentista">
        <input type="text" name="apellido" placeholder="apellido dentista">
        <input type="text" name="dni" placeholder="dni dentista">
        <label for="fecha_nacimiento">Fecha:nacimiento:</label>
        <input type="date" name="fecha_nacimiento" placeholder="fecha nacimiento dentista">
        <input type="boolean" name="en_vacaciones" placeholder="vacaciones dentista">
        <input type="submit" value="Añadir dentista">
    </form>
</body>
</html>