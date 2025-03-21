<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Agenda</h1>
        <table class="table">
            <tr><th>Fecha</th><th>Hora</th><th>Persona</th><th>Imagen</th></tr>
            @foreach ($agenda as $item)
                <tr>
                    <td>{{ $item->fecha }}</td>
                    <td>{{ $item->hora }}</td>
                    <td>{{ $item->persona->nombre }}</td>
                    <td><img src="{{ asset('imagen/' . $item->imagen->imagen) }}" width="50"></td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection 
</body>
</html>

