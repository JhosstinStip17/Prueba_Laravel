<?php

namespace App\Http\Controllers;

use App\Models\Jugador;
use App\Models\plantilla;
use Illuminate\Http\Request;

class JugadorController extends Controller
{
    
    public function index() 
    {
        $jugadores = Jugador::all();
        $plantilla = plantilla::all();
        return view("jugador_views.index", ["jugadores"=> $jugadores,"plantillas"=> $plantilla]);
    }

    
    public function create()
    {
        $plantillas = plantilla::all();
        return view("jugador_views.create", compact("plantillas"));
    }

    
    public function store(Request $request)
    {
        Jugador::create($request->all());
        return to_route("jugador.index")->with("success","AGREGADO CORRECTAMENTE");
    }

    
    public function show(Jugador $jugador)
    {
        //
    }

  
    public function edit(Jugador $jugador)
    {
        $jugadores = Jugador::all();
        return view("jugador_views.index", compact("","jugadores"));
    }

  
    public function update(Request $request, Jugador $jugador)
    {
        //
    }


    public function destroy(Jugador $jugador)
    {
        //
    }
}
