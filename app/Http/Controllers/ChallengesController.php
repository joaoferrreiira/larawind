<?php

namespace App\Http\Controllers;

use App\Models\Challenges;
use App\Models\ChallengesCategories;
use Illuminate\Http\Request;

class ChallengesController extends Controller
{
    public function index()
    {
        $challenges = Challenges::paginate(10);

        return view('challenges.index', compact('challenges'));
    }

    public function create()
    {
        $categories = ChallengesCategories::select('id', 'name')->get();

        return view('challenges.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $challenge = new Challenges;
        $challenge->challenges_categories_id = $request->challenges_categories_id;
        $challenge->challenge = $request->challenge;
        $challenge->quantity = $request->quantity;
        $challenge->save();

        return redirect('desafios');
    }

    public function show($id)
    {
        return redirect('desafios');
    }

    public function edit($id)
    {
        $challenge = Challenges::find($id);
        $categories = ChallengesCategories::select('id', 'name')->get();

        return view('challenges.edit', compact('challenge', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $challenge = Challenges::find($id);
        $challenge->challenges_categories_id = $request->challenges_categories_id;
        $challenge->challenge = $request->challenge;
        $challenge->quantity = $request->quantity;
        $challenge->save();

        return redirect('desafios');
    }

    public function destroy($id)
    {
        $challenge = Challenges::find($id);
        $challenge->delete();

        return redirect('desafios');
    }
}
