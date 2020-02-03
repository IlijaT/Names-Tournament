<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class RankingsController extends Controller
{
    public function index()
    {
        dd('u ranking kontroloru ');
        // $users = User::orderBy('points', 'desc')->paginate(50);
        return view('rankings');
    }
}
