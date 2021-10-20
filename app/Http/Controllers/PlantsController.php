<?php

namespace App\Http\Controllers;

use App\Models\Plants;
use App\Models\PlantsType;
use Illuminate\Http\Request;

class PlantsController extends Controller
{
    public function index()
    {
        $plants = Plants::paginate(10);

        return view('plants.index', compact('plants'));
    }

    public function create()
    {
        $plants_type = PlantsType::where('plants_types_categories_id', 1)->select('id', 'name')->get();
        $leaf_type = PlantsType::where('plants_types_categories_id', 2)->select('id', 'name')->get();
        $flower_type = PlantsType::where('plants_types_categories_id', 3)->select('id', 'name')->get();
        $fruit_type = PlantsType::where('plants_types_categories_id', 4)->select('id', 'name')->get();
        $habitat_type = PlantsType::where('plants_types_categories_id', 5)->select('id', 'name')->get();

        return view('plants.create', compact('plants_type', 'leaf_type', 'flower_type', 'fruit_type', 'habitat_type'));
    }

    public function store(Request $request)
    {
        $plant = new Plants;
        $plant->name = $request->name;
        $plant->scientific_name = $request->scientific_name;
        $plant->images = $request->images;
        $plant->legend = $request->legend;
        $plant->origin = $request->origin;
        $plant->foliage_duration = $request->foliage_duration;

        $plant->flowering_season =  $request->flowering_season_from . '-' . $request->flowering_season_to;

        $plant->fruit_season = $request->fruit_season_from . '-' . $request->fruit_season_to;

        $plant->height = $request->height;
        $plant->native_area = $request->native_area;
        $plant->longevity = $request->longevity;
        $plant->characteristics = $request->characteristics;
        $plant->curiosities = $request->curiosities;

        $plant->save();

        $plantt = Plants::orderBy('id', 'desc')->first();

        $plantt->types()->attach($request->plant_type);
        $plantt->types()->attach($request->leaf_type);
        $plantt->types()->attach($request->flower_type);
        $plantt->types()->attach($request->fruit_type);
        $plantt->types()->attach($request->habitat_type);

        return redirect('plantas');
    }

    public function show($id)
    {
        return redirect('plantas');
    }

    public function edit($id)
    {
        $plant = Plants::find($id);

        $plants_type = PlantsType::where('plants_types_categories_id', 1)->select('id', 'name')->get();
        $leaf_type = PlantsType::where('plants_types_categories_id', 2)->select('id', 'name')->get();
        $flower_type = PlantsType::where('plants_types_categories_id', 3)->select('id', 'name')->get();
        $fruit_type = PlantsType::where('plants_types_categories_id', 4)->select('id', 'name')->get();
        $habitat_type = PlantsType::where('plants_types_categories_id', 5)->select('id', 'name')->get();

        return view('plants.edit', compact('plant', 'plants_type', 'leaf_type', 'flower_type', 'fruit_type', 'habitat_type'));
    }

    public function update(Request $request, $id)
    {
        $plant = Plants::find($id);
        $plant->name = $request->name;
        $plant->scientific_name = $request->scientific_name;
        $plant->images = $request->images;
        $plant->legend = $request->legend;
        $plant->origin = $request->origin;
        $plant->foliage_duration = $request->foliage_duration;

        $plant->flowering_season =  $request->flowering_season_from . '-' . $request->flowering_season_to;

        $plant->fruit_season = $request->fruit_season_from . '-' . $request->fruit_season_to;

        $plant->height = $request->height;
        $plant->native_area = $request->native_area;
        $plant->longevity = $request->longevity;
        $plant->characteristics = $request->characteristics;
        $plant->curiosities = $request->curiosities;

        $plant->save();

        $plantt = Plants::find($id);

        $plantt->types()->detach();

        $plantt->types()->attach($request->plant_type);
        $plantt->types()->attach($request->leaf_type);
        $plantt->types()->attach($request->flower_type);
        $plantt->types()->attach($request->fruit_type);
        $plantt->types()->attach($request->habitat_type);

        return redirect('plantas');
    }

    public function destroy($id)
    {
        $plant = Plants::find($id);
        $plant->delete();

        return redirect('plantas');
    }
}
