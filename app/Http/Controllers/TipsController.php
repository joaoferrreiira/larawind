<?php

namespace App\Http\Controllers;

use App\Models\Tips;
use Illuminate\Http\Request;

class TipsController extends Controller
{
    public function index()
    {
        $tips = Tips::paginate(10);

        return view('tips.index', compact('tips'));
    }

    public function create()
    {
        return view('tips.create');
    }

    public function store(Request $request)
    {
        $tip = new Tips;
        $tip->tip = $request->tip;
        $tip->save();

        return redirect('dicas');
    }

    public function show($id)
    {
        return redirect('dicas');
    }

    public function edit($id)
    {
        $tip = Tips::find($id);

        return view('tips.edit', compact('tip'));
    }

    public function update(Request $request, $id)
    {
        $tip = Tips::find($id);
        $tip->tip = $request->tip;
        $tip->save();

        return redirect('dicas');
    }

    public function destroy($id)
    {
        $tip = Tips::find($id);
        $tip->delete();

        return redirect('dicas');
    }
}
