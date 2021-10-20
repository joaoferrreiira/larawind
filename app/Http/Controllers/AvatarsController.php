<?php

namespace App\Http\Controllers;

use App\Models\Avatars;
use Illuminate\Http\Request;

class AvatarsController extends Controller
{
    public function index()
    {
        $avatars = Avatars::paginate(10);

        return view('avatars.index', compact('avatars'));
    }

    public function create()
    {
        return view('avatars.create');
    }

    public function store(Request $request)
    {

        $avatar = new Avatars;
        $request->file('avatar')->store('public/avatars');
        $avatar->avatar = 'public/avatars/' . $request->file('avatar')->hashName();
        $avatar->save();

        return redirect('avatares');
    }

    public function show($id)
    {
        return redirect('avatares');
    }

    public function edit($id)
    {
        $avatar = Avatars::find($id);

        return view('avatars.edit', compact('avatar'));
    }

    public function update(Request $request, $id)
    {
        $avatar = Avatars::find($id);
        $request->file('avatar')->store('public/avatars');
        $avatar->avatar = 'public/avatars/' . $request->file('avatar')->hashName();
        $avatar->save();

        return redirect('avatares');
    }

    public function destroy($id)
    {
        $avatar = Avatars::find($id);
        $avatar->delete();

        return redirect('avatares');
    }
}
