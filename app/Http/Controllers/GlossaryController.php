<?php

namespace App\Http\Controllers;

use App\Models\Glossary;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GlossaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $glossary = DB::table('glossary')->get();
        return view('glossary.index', compact('glossary'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $edit = false;
        return view('glossary.create-edit', compact('edit'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('glossary')->insert([
            'term' => $request->termo,
            'description' => $request->descricao
        ]);

        return redirect('glossario');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Glossary  $glossary
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return redirect('glossario');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Glossary  $glossary
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $glossary = DB::table('glossary')->where('id', $id)->first();
        $edit = true;
        return view('glossary.create-edit', compact('edit', 'glossary'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Glossary  $glossary
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        DB::table('glossary')->where('id', $id)->update(
            ['term' => $request->termo],
            ['description' => $request->descricao]
        );
        //dd(DB::table('glossary')->get());
        return redirect('glossario');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Glossary  $glossary
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('glossary')->where('id', $id)->delete();
        return redirect('glossario');
    }
}
