<?php

namespace App\Http\Controllers;

use App\User;
use App\Tournament;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class TournamentsController extends Controller
{


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tournament = Tournament::create(['name' => Str::upper(Str::random(10))]);
        $competitors = User::all()->random(16);

        return $competitors;
    }
}
