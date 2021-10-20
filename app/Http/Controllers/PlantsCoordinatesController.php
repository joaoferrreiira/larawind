<?php

namespace App\Http\Controllers;

use App\Models\PlantsCoordinates;
use Illuminate\Http\Request;

class PlantsCoordinatesController extends Controller
{
    public function index()
    {
        $coord = PlantsCoordinates::paginate(10);

        return view('plants-coordinates.index', compact('coord'));
    }

    public function create()
    {
        return redirect('coordenadas-plantas');
        //return view('plants-coordinates.create');
    }

    public function store(Request $request)
    {
        $coord = new PlantsCoordinates;
        $coord->x = $request->x;
        $coord->y = $request->y;
        $coord->plants_id = $request->plants_id;
        $coord->users_id = $request->users_id;
        $coord->save();

        return redirect('coordenadas-plantas');
    }

    public function show($id)
    {
        return redirect('coordenadas-plantas');
    }

    public function edit($id)
    {
        //$tip = PlantsCoordinates::find($id);

        return redirect('coordenadas-plantas');
        //return view('plants-coordinates.edit', compact('tip'));
    }

    public function update(Request $request, $id)
    {
        $coord = PlantsCoordinates::find($id);
        $coord->x = $request->x;
        $coord->y = $request->y;
        $coord->plants_id = $request->plants_id;
        $coord->users_id = $request->users_id;
        $coord->save();

        return redirect('coordenadas-plantas');
    }

    public function destroy($id)
    {
        $coord = PlantsCoordinates::find($id);
        $coord->delete();

        return redirect('coordenadas-plantas');
    }
}
