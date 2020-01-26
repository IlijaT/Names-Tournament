<?php

namespace App\Http\Controllers;

use App\User;
use App\Tournament;
use Illuminate\Http\Request;

class WinnersController extends Controller
{
    public function show(Tournament $tournament) 
    {
        $winner = $tournament->winner();

       return view('tournaments.winner', compact('tournament', 'winner'));  
     
    }


    public function store(Tournament $tournament) 
    {
        request()->validate([
            'participants' => 'required|array|min:1|max:1',
        ], [
            'participants.*' => 'Niste čekirali pobednka turnira!'
        ]);

        $winner = User::find(request('participants'))->first();

        $tournament->createWinner($winner);
        
        return redirect(route('winners.show', $tournament->id));
    
    }
}
