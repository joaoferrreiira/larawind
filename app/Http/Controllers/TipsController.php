<?php

namespace App\Http\Controllers;

use App\Models\Tips;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TipsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tips = DB::table('tips')->get();
        return view('tips.index', compact('tips'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $edit = false;
        return view('tips.create-edit', compact('edit'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('tips')->insert([
            'tip' => $request->dica
        ]);

        return redirect('dicas');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tips  $tips
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return redirect('dicas');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tips  $tips
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tips = DB::table('tips')->where('id', $id)->first();
        $edit = true;
        return view('tips.create-edit', compact('edit', 'tips'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tips  $tips
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        DB::table('tips')->where('id', $id)->update(
            ['tip' => $request->dica]
        );
        //dd(DB::table('tips')->get());
        return redirect('dicas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tips  $tips
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('tips')->where('id', $id)->delete();
        return redirect('dicas');
    }
}
