<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use App\Models\Persona;
use App\Models\Imagen;
use Illuminate\Http\Request; 

class PersonaController extends Controller
{
    public function index() {
        $personas = Persona::all();
        return view('personas.index', compact('personas'));
    }

    public function create() {
        return view('personas.create');
    }

    public function store(Request $request) {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'apellidos' => 'required|string|max:255',
            'edad' => 'required|integer|min:0'
        ]);

        Persona::create($request->all());
        return redirect('/personas')->with('success', 'Persona agregada correctamente.');
    }
}
