<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cliente</title>
</head>
<body>
    <h1>Añadir Cliente</h1>
    <form action="/clientes/store" method="post">
        @csrf 
        @if($errors->any()) 
            
            <ul>
                @foreach ($errors->all() as $error) 
                    <li>{{$error}}</li>
                @endforeach
            </ul>
            @endif
        <input type="text" name="nombre" placeholder="nombre cliente">
        <input type="text" name="apellido" placeholder="apellido cliente">
        <input type="text" name="dni" placeholder="dni cliente">
        <label for="dentista">Dentista:</label>
        <select name="dentista_id">
            @foreach ($dentistas as $dentista)
                <option name="dentista_id" value="{{ $dentista->id }}">
                    {{ $dentista->nombre }} {{ $dentista->apellido }} 
                </option>
            @endforeach
        </select>
        <label for="fecha_nacimiento">Fecha:nacimiento:</label>
        <input type="date" name="fecha_nacimiento" placeholder="fecha nacimiento cliente">
        <input type="submit" value="Añadir cliente">
    </form>
</body>
</html>