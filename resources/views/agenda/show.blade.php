<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda del Día</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #000;
            padding: 8px;
            text-align: left;
        }
      
        img {
            width: 100px; /* Tamaño de la imagen */
            height: auto; /* Mantener proporciones */
        }
    </style>
</head>
<body>
@extends('layouts.app') <!-- Asegúrate de que el layout exista -->

@section('content')
    <div>
        <h1>Agenda del Día</h1>
        <form action="{{ url('/agenda/show') }}" method="GET">
            <label for="persona">Persona</label>
            <select id="persona" name="persona" required>
                @foreach ($personas as $persona)
                    <option value="{{ $persona->id }}">{{ $persona->nombre }}</option>
                @endforeach
            </select>
            
            <label for="fecha">Fecha</label>
            <input type="date" id="fecha" name="fecha" required>
            
            <button type="submit">Buscar</button>
        </form>

        @if(isset($agenda))
            <table>
                <tr>
                    <th>Fecha</th>
                    <th>Hora</th>
                    <th>Imagen</th>
                </tr>
                @foreach ($agenda as $item)
                    <tr>
                        <td>{{ $item->fecha }}</td>
                        <td>{{ $item->hora }}</td>
                        <td><img src="{{ asset('imagen/' . $item->imagen) }}" alt="Imagen"></td>
                    </tr>
                @endforeach
            </table>
        @endif
    </div>
@endsection
</body>
</html>
