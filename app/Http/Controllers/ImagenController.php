<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use App\Models\Persona;
use App\Models\Imagen;
use Illuminate\Http\Request;


class ImagenController extends Controller
{
    public function index() {
        $imagenes = Imagen::all();
        return view('imagenes.index', compact('imagenes'));
    }

    public function create() {
        return view('imagenes.create');
    }

    public function store(Request $request) {
        $request->validate([
            'imagen' => 'required|string|max:255'
        ]);

        Imagen::create($request->all());
        return redirect('/imagenes')->with('success', 'Imagen agregada correctamente.');
    }
}
