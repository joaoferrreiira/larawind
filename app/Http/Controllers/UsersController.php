<?php

namespace App\Http\Controllers;

use App\Models\PlantsCoordinates;
use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        $players = User::paginate(10);

        return view('players.index', compact('players'));
    }

    public function create()
    {
        return view('players.create');
    }

    public function store(Request $request)
    {
        $player = new User;
        $player->name = $request->name;
        $player->email = $request->email;
        $player->password = password_hash($request->password, PASSWORD_DEFAULT);
        $player->save();

        return redirect('jogadores');
    }

    public function show($id)
    {
        return redirect('jogadores');
    }

    public function edit($id)
    {
        $player = User::find($id);

        return view('players.edit', compact('player'));
    }

    public function update(Request $request, $id)
    {
        $player = User::find($id);
        $player->name = $request->name;
        $player->email = $request->email;
        $player->save();

        return redirect('jogadores');
    }

    public function destroy($id)
    {
        $player = User::find($id);
        $player->delete();

        //foreach (PlantsCoordinates::get() as $p) {
        //    if ($p->users_id == $id) {
        //        $coord = PlantsCoordinates::find($id);
        //        $coord->delete();
        //    }
        //}

        return redirect('jogadores');
    }
}
