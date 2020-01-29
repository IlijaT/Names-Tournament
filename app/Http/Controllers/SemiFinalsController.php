<?php

namespace App\Http\Controllers;

use App\User;
use App\Tournament;
use Illuminate\Http\Request;

class SemiFinalsController extends Controller
{

    public function show(Tournament $tournament) 
    {
        if($tournament->isSemiFinalFinished()) {
            abort(404);
        }

        $semiFinalists = $tournament->semiFinalists();

        return view('tournaments.semi-final', compact('tournament', 'semiFinalists'));  
     
    }

    public function store(Tournament $tournament)
    {
        request()->validate([
            'participants' => 'required|array|min:4|max:4',
        ], [
            'participants.*' => 'Niste čekirali sve pobednike duela!'
        ]);

        $semiFinalists = User::findMany(request('participants'));
        $tournament->createSemiFinal($semiFinalists );
        
        return redirect(route('semi-finals.show', $tournament->id));

    }
}
