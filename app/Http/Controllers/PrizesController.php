<?php

namespace App\Http\Controllers;

use App\Models\Prizes;
use Illuminate\Http\Request;

class PrizesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prizes = Prizes::get();
        return view('prizes.index', compact('prizes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Prizes  $prizes
     * @return \Illuminate\Http\Response
     */
    public function show(Prizes $prizes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Prizes  $prizes
     * @return \Illuminate\Http\Response
     */
    public function edit(Prizes $prizes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Prizes  $prizes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Prizes $prizes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Prizes  $prizes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Prizes $prizes)
    {
        //
    }
}
