<?php

namespace App\Http\Controllers;

use App\Models\Journeys;
use App\Models\JourneysChallenges;
use Illuminate\Http\Request;

class JourneysChallengesController extends Controller
{
    public function index()
    {
        $challenges = JourneysChallenges::paginate(10);

        return view('journeys-challenges.index', compact('challenges'));
    }

    public function create()
    {
        $journeys = Journeys::select('id', 'name')->get();
        return view('journeys-challenges.create', compact('journeys'));
    }

    public function store(Request $request)
    {
        $challenge = new JourneysChallenges;
        $challenge->challenge = $request->challenge;
        $challenge->points = $request->points;
        $challenge->journeys_id = $request->journeys_id;
        $challenge->save();

        return redirect('desafios-jornadas');
    }

    public function show($id)
    {
        return redirect('dicas');
    }

    public function edit($id)
    {
        $journeys = Journeys::select('id', 'name')->get();
        $challenge = JourneysChallenges::find($id);

        return view('journeys-challenges.edit', compact('journeys', 'challenge'));
    }

    public function update(Request $request, $id)
    {
        $challenge = JourneysChallenges::find($id);
        $challenge->challenge = $request->challenge;
        $challenge->points = $request->points;
        $challenge->journeys_id = $request->journeys_id;
        $challenge->save();

        return redirect('desafios-jornadas');
    }

    public function destroy($id)
    {
        $challenge = JourneysChallenges::find($id);
        $challenge->delete();

        return redirect('desafios-jornadas');
    }
}
