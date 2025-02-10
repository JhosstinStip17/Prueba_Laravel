<?php

namespace App\Http\Controllers;

use App\Models\Club;
use App\Models\Plantilla;
use Illuminate\Http\Request;

class PlantillaController extends Controller
{

    public function index()
    {
        $club = Club::all();
        $plantillas = Plantilla::all();
        return view("plantilla_views.index", compact("plantillas"),["club"=>$club]);
    }
    
    public function create()
    {
        $clubes = Club::all();
        return view("plantilla_views.create", ["clubes"=>$clubes]);
    }

    public function store(Request $request)
    {
        Plantilla::create($request->all(""));
        return to_route("plantilla.index" )->with("success","CREANDO CORRECTAMENTE");
    }


    public function show(plantilla $plantilla)
    {
        //
    }


    public function edit(plantilla $plantilla)
    {
        //
    }

 
    public function update(Request $request, plantilla $plantilla)
    {
        //
    }

  
    public function destroy(plantilla $plantilla)
    {
        //
    }
}
