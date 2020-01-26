<?php

namespace App\Http\Controllers;

use App\User;
use App\Tournament;
use Illuminate\Http\Request;

class QuarterFinalsController extends Controller
{
    
    public function show(Tournament $tournament) 
    {
        $quarterFinalists = $tournament->quarterFinalists();

        return view('tournaments.quarter-final', compact('tournament', 'quarterFinalists'));
    
    }
    

    public function store(Tournament $tournament)
    {
        request()->validate([
            'participants' => 'required|array|min:8|max:8',
        ], [
            'participants.*' => 'Niste čekirali sve pobednike duela!'
        ]);

        $quarterFinalists = User::findMany(request('participants'));

        $tournament->createQuarterFinal($quarterFinalists);
        
        return redirect(route('quarter-final.show', $tournament->id));
        

    }


}
