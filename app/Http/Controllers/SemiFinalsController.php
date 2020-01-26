<?php

namespace App\Http\Controllers;

use App\User;
use App\Tournament;
use Illuminate\Http\Request;

class SemiFinalsController extends Controller
{
    public function store(Tournament $tournament)
    {
        request()->validate([
            'participants' => 'required|array|min:4|max:4',
        ], [
            'participants.*' => 'Niste čekirali sve pobednike duela!'
        ]);

        $semiFinalists = User::findMany(request('participants'));
        dd('semi final');    
        // $tournament->createSemiFinal($semiFinalists );
        
        // return redirect(route('quarter-final.show', $tournament->id));
        

    }
}
