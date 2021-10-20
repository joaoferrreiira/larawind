<?php

namespace App\Http\Controllers;

use App\Models\Journeys;
use Illuminate\Http\Request;

class JourneysController extends Controller
{
    public function index()
    {
        $journeys = Journeys::orderBy('max_points', 'asc')->paginate(10);

        return view('journeys.index', compact('journeys'));
    }

    public function create()
    {
        return view('journeys.create');
    }

    public function store(Request $request)
    {
        $journey = new Journeys;
        $journey->name = $request->name;
        $journey->max_points = $request->max_points;
        $journey->save();

        return redirect('jornadas');
    }

    public function show($id)
    {
        return redirect('jornadas');
    }

    public function edit($id)
    {
        $journey = Journeys::find($id);

        return view('journeys.edit', compact('journey'));
    }

    public function update(Request $request, $id)
    {
        $journey = Journeys::find($id);
        $journey->name = $request->name;
        $journey->max_points = $request->max_points;
        $journey->save();

        return redirect('jornadas');
    }

    public function destroy($id)
    {
        $journey = Journeys::find($id);
        $journey->delete();

        return redirect('jornadas');
    }
}
