<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Entrada a la Agenda</title>
</head>
<body>
@extends('layouts.app')
@section('content')
    <div>
        <h1>Agregar Entrada a la Agenda</h1>
        <form action="{{ url('/agenda/store') }}" method="POST">
            @csrf
            <div>
                <label for="fecha">Fecha</label>
                <input type="date" id="fecha" name="fecha" required>
            </div>
            <div>
                <label for="hora">Hora</label>
                <input type="time" id="hora" name="hora" required>
            </div>
            <div>
                <label for="idpersona">Persona</label>
                <select id="idpersona" name="idpersona" required>
                    @foreach ($personas as $persona)
                        <option value="{{ $persona->id }}">{{ $persona->nombre }}</option>
                    @endforeach
                </select>
            </div>
            <div>
               
                <table>
                    <tr>
                        @foreach ($imagenes as $imagen)
                            <td style="text-align: center;">
                                <input type="radio" name="idimagen" value="{{ $imagen->id }}" required>
                                <img src="{{ asset('imagen/' . $imagen->imagen) }}" alt="Imagen" style="width: 100px; height: auto;">
                            </td>
                        @endforeach
                    </tr>
                </table>
            </div>
            <button type="submit">Guardar</button>
        </form>
    </div>
@endsection
</body>
</html>
