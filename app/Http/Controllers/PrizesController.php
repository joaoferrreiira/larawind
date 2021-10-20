<?php

namespace App\Http\Controllers;

use App\Models\Prizes;
use Illuminate\Http\Request;

class PrizesController extends Controller
{
    public function index()
    {
        $prizes = Prizes::paginate(10);

        return view('prizes.index', compact('prizes'));
    }

    public function create()
    {
        return view('prizes.create');
    }

    public function store(Request $request)
    {
        $prize = new Prizes;
        $prize->name = $request->name;
        $prize->image = $request->image;
        $prize->description = $request->description;
        $prize->save();

        return redirect('premios');
    }

    public function show($id)
    {
        return redirect('premios');
    }

    public function edit($id)
    {
        $prize = Prizes::find($id);

        return view('prizes.edit', compact('prize'));
    }

    public function update(Request $request, $id)
    {
        $prize = Prizes::find($id);
        $prize->name = $request->name;
        $prize->image = $request->image;
        $prize->description = $request->description;
        $prize->save();

        return redirect('premios');
    }

    public function destroy($id)
    {
        $prize = Prizes::find($id);
        $prize->delete();

        return redirect('premios');
    }
}
