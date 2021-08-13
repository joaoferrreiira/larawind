<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\PlantsType;
use App\Models\PlantsTypeCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PlayersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $players = DB::table('users')->get();
        return view('players.index', compact('players'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $edit = false;
        return view('players.create-edit', compact('edit'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('users')->insert([
            'name' => $request->nome,
            'email' => $request->email,
            'password' => $request->pass
        ]);

        return redirect('jogadores');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return redirect('jogadores');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $player = DB::table('users')->where('id', $id)->first();
        $edit = true;
        return view('players.create-edit', compact('edit', 'player'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if($id != 1) {
            DB::table('users')->where('id', $id)->update(
                ['name' => $request->nome],
                ['email' => $request->email],
                ['password' => $request->pass]
            );
        }
        return redirect('jogadores');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if($id != 1) {
            DB::table('users')->where('id', $id)->delete();
        }
        return redirect('jogadores');
    }
}
