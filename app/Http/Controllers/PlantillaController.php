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
        $plant = Plantilla::all();
        return view("plantilla_views.index", compact("plant"));
    }
    
    public function create()
    {
        return view("plantilla_views.create");
    }

    public function store(Request $request)
    {
        Plantilla::created($request->all(""));
        return to_route("plantilla.store", $request->all(""));
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
