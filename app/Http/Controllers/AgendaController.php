<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use App\Models\Persona;
use App\Models\Imagen;
use Illuminate\Http\Request;

class AgendaController extends Controller
{
    public function index() {
        $agenda = Agenda::with(['persona', 'imagen'])->get();
        return view('agenda.index', compact('agenda'));
    }

    public function create() {
        $personas = Persona::all();
        $imagenes = Imagen::all();

        if ($personas->isEmpty() || $imagenes->isEmpty()) {
            return back()->with('error', 'No hay datos suficientes para crear una agenda.');
        }
        return view('agenda.create', compact('personas', 'imagenes'));
    }

    public function store(Request $request) {
        $request->validate([
            'idpersona' => 'required|exists:personas,id',
            'idimagen' => 'required|exists:imagenes,id',
            'fecha' => 'required|date',
            'hora' => 'required|date_format:H:i',
        ]);

        Agenda::create($request->all());
        return redirect('/agenda/create')->with('success', 'Entrada agregada correctamente.');
    }

    public function showAgendaByDate(Request $request) {
        $agenda = Agenda::select('imagenes.imagen', 'agendas.fecha', 'agendas.hora')
            ->join('imagenes', 'imagenes.id', '=', 'agendas.idimagen')
            ->where('agendas.idpersona', $request->persona)
            ->where('agendas.fecha', $request->fecha)
            ->get();
    
        $personas = Persona::all(); // Fetch personas to pass to the view
    
        return view('agenda.show', compact('agenda', 'personas'));
    }
}