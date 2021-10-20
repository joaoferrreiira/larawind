<?php

namespace App\Http\Controllers;

use App\Models\ChallengesCategories;
use Illuminate\Http\Request;

class ChallengesCategoriesController extends Controller
{
    public function index()
    {
        $categories = ChallengesCategories::paginate(10);

        return view('challenges-categories.index', compact('categories'));
    }

    public function create()
    {
        return view('challenges-categories.create');
    }

    public function store(Request $request)
    {
        $category = new ChallengesCategories;
        $category->name = $request->name;
        $category->description = $request->description;
        $category->save();

        return redirect('categorias-desafios');
    }

    public function show($id)
    {
        return redirect('categorias-desafios');
    }

    public function edit($id)
    {
        $category = ChallengesCategories::find($id);

        return view('challenges-categories.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $category = ChallengesCategories::find($id);
        $category->name = $request->name;
        $category->description = $request->description;
        $category->save();

        return redirect('categorias-desafios');
    }

    public function destroy($id)
    {
        $categories = ChallengesCategories::find($id);
        $categories->delete();

        return redirect('categorias-desafios');
    }
}
