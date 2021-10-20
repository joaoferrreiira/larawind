<?php

namespace App\Http\Controllers;

use App\Models\Settings;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function index()
    {
        $settings = Settings::paginate(10);

        return view('settings.index', compact('settings'));
    }

    public function create()
    {
        return redirect('definicoes');
    }

    public function store(Request $request)
    {
        return redirect('definicoes');
    }

    public function show($id)
    {
        return redirect('definicoes');
    }

    public function edit($id)
    {
        $settings = Settings::find($id);

        return view('settings.edit', compact('settings'));
    }

    public function update(Request $request, $id)
    {
        $settings = Settings::find($id);
        $settings->terms = $request->terms;
        $settings->privacy_politics = $request->privacy_politics;
        $settings->save();

        return redirect('definicoes');
    }

    public function destroy($id)
    {
        return redirect('definicoes');
    }
}
