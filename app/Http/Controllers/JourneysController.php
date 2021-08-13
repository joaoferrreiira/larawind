<?php

namespace App\Http\Controllers;

use App\Models\Journeys;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JourneysController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $journeys = DB::table('journeys')->get();
        return view('journeys.index', compact('journeys'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $edit = false;
        return view('journeys.create-edit', compact('edit'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('journeys')->insert([
            'name' => $request->nome,
            'max_points' => $request->max_pontos
        ]);

        return redirect('jornadas');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Journeys  $journeys
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return redirect('jornadas');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Journeys  $journeys
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $journeys = DB::table('journeys')->where('id', $id)->first();
        $edit = true;
        return view('journeys.create-edit', compact('edit', 'journeys'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Journeys  $journeys
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        DB::table('journeys')->where('id', $id)->update(
            ['name' => $request->nome],
            ['max_points' => $request->max_pontos]
        );
        
        return redirect('jornadas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Journeys  $journeys
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('journeys')->where('id', $id)->delete();
        return redirect('jornadas');
    }
}
