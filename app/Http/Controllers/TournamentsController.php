<?php

namespace App\Http\Controllers;

use App\User;
use App\Tournament;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class TournamentsController extends Controller
{

    public function store()
    {
        $tournament = Tournament::create(['name' => Str::upper(Str::random(10))]);
        $tournament->createFirstRound();

        return redirect(route('tournaments.show', $tournament));
    }

    public function show(Tournament $tournament)
    {
        return view('tournaments.show', compact('tournament'));
    }
}
