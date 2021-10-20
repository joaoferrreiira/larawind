<?php

namespace App\Http\Controllers;

use App\Models\PlantsType;
use Illuminate\Http\Request;

class PlantsTypesController extends Controller
{
    public function index()
    {
        //$a = PlantsType::find(1);
        //dd($a->categories);
        //dd($a->types);

        $categoriess = PlantsType::paginate(10);

        return view('plants-types.index', compact('categoriess'));
    }

    public function create()
    {
        return view('plants-types.create');
    }

    public function store(Request $request)
    {
        $type = new PlantsType;
        $type->name = $request->name;
        $type->save();

        return redirect('tipos-plantas');
    }

    public function show($id)
    {
        return redirect('tipos-plantas');
    }

    public function edit($id)
    {
        $type = PlantsType::find($id);

        return view('plants-types.edit', compact('type'));
    }

    public function update(Request $request, $id)
    {
        $type = PlantsType::find($id);
        $type->name = $request->name;
        $type->save();

        return redirect('categorias-tipos-planta');
    }

    public function destroy($id)
    {
        $type = PlantsType::find($id);
        $type->delete();

        return redirect('tipos-plantas');
    }
}
