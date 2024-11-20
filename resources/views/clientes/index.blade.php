<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
</head>
<body>
    <h1>Lista clientes</h1>
    <ul>
        @foreach ($clientes as $cliente)
            <li>
                {{$cliente->nombre}} {{$cliente->apellido}} {{$cliente->dni}}
                @if ($cliente->dentista)
                    <select name="dentista_id">
                        @foreach ($dentistas as $dentista)
                            <option name="dentista_id" value="{{ $dentista->id }}">
                                {{ $dentista->nombre }} {{ $dentista->apellido }} 
                            </option>
                        @endforeach
                    </select>
                        

                @else
                    Sin asignar
                @endif
                <form action="/clientes/update/{{ $cliente->id }}" method="POST" style="display:inline;">
                    @csrf
                    @method('PUT')
                    <button type="submit">Guardar</button>
                </form>
                
            </li>
             
        @endforeach
  </ul>
    
    <a href="/clientes/create">Formulario para añadir cliente</a>
</body>
</html>
