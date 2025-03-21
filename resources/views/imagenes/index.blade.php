<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Imágenes</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        td {
            text-align: center;
            padding: 10px;
        }
        img {
            width: 100px; /* Tamaño de la imagen */
            height: auto; /* Mantener proporciones */
        }
    </style>
</head>
<body>
@extends('layouts.app')
@section('content')
    <div>
        <h1>Listado de Imágenes</h1>
        <table>
            <tr>
              
            </tr>
            @foreach ($imagenes as $index => $imagen)
                @if ($index % 4 == 0 && $index != 0)
                    </tr><tr>
                @endif
                <td>
                    <img src="{{ asset('imagen/' . $imagen->imagen) }}" alt="Imagen"><br>
                    {{ $imagen->imagen }}
                </td>
            @endforeach
        </tr>
        </table>
    </div>
@endsection
</body>
</html>
