<?php

namespace App\Http\Controllers;

use App\Models\Glossary;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class GlossaryController extends Controller
{
    public function index()
    {
        $glossary = Glossary::paginate(10);

        return view('glossary.index', compact('glossary'));
    }

    public function create()
    {
        return view('glossary.create');
    }

    public function store(Request $request)
    {
        $glossary = new Glossary;
        $glossary->term = Str::ucfirst($request->term);
        $glossary->description = $request->description;
        $glossary->save();

        return redirect('glossario');
    }

    public function show($id)
    {
        return redirect('glossario');
    }

    public function edit($id)
    {
        $glossary = Glossary::find($id);

        return view('glossary.edit', compact('glossary'));
    }

    public function update(Request $request, $id)
    {
        $glossary = Glossary::find($id);
        $glossary->term = Str::ucfirst($request->term);
        $glossary->description = $request->description;
        $glossary->save();

        return redirect('glossario');
    }

    public function destroy($id)
    {
        $glossary = Glossary::find($id);
        $glossary->delete();

        return redirect('glossario');
    }
}
