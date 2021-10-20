<?php

namespace App\Http\Controllers;

use App\Models\PlantsTypeCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PlantsTypesCategoriesController extends Controller
{
    public function index()
    {
        //$a = PlantsTypeCategory::find(1);
        //dd($a->types);

        $categories = PlantsTypeCategory::paginate(10);

        return view('plants-types-categories.index', compact('categories'));
    }

    public function create()
    {
        return redirect('categorias-tipos-plantas');

        return view('plants-types-categories.create');
    }

    public function store(Request $request)
    {
        $category = new PlantsTypeCategory;
        $category->name = Str::title($request->name);
        $category->save();

        return redirect('categorias-tipos-plantas');
    }

    public function show($id)
    {
        return redirect('categorias-tipos-plantas');
    }

    public function edit($id)
    {
        return redirect('categorias-tipos-plantas');

        $category = PlantsTypeCategory::find($id);

        return view('plants-types-categories.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $category = PlantsTypeCategory::find($id);
        $category->name = Str::title($request->name);
        $category->save();

        return redirect('categorias-tipos-plantas');
    }

    public function destroy($id)
    {
        $category = PlantsTypeCategory::find($id);
        $category->delete();

        return redirect('categorias-tipos-plantas');
    }
}
