<?php

namespace App\Http\Controllers;

use App\User;
use App\Tournament;
use Illuminate\Http\Request;

class FinalsController extends Controller
{
    
    public function show(Tournament $tournament) 
    {
        $finalists = $tournament->finalists();

        return view('tournaments.final', compact('tournament', 'finalists'));  
     
    }


    public function store(Tournament $tournament) 
    {
        request()->validate([
            'participants' => 'required|array|min:2|max:2',
        ], [
            'participants.*' => 'Niste čekirali sve pobednike duela!'
        ]);

        $finalists = User::findMany(request('participants'));
        $tournament->createFinal($finalists);
        
        return redirect(route('finals.show', $tournament->id));
    
    }
}
