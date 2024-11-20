<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dentistas</title>
</head>
<body>
    <h1>Lista dentistas</h1>
    <ul>
        @foreach ($dentistas as $dentista)
            <li>
                {{$dentista->nombre}} {{$dentista->apellido}} {{$dentista->dni}} {{$dentista->fecha_nacimiento}} {{$dentista->en_vacaciones}} 
                <form action="/dentistas/edit/{{ $dentista->id }}" method="get" style="display:inline;">
                @csrf
                <button type="submit">Editar dentista</button>
                </form>

                <form action="/dentistas/delete/{{ $dentista->id }}" method="get" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Borrar dentista</button>
                </form>
            </li>
            
        @endforeach
    </ul>
    <a href="/dentistas/create">Formulario para añadir dentistas</a>
</body>
</html>
