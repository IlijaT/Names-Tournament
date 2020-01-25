<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tournament extends Model
{
    protected $guarded = [];


    public function users()
    {
        return $this->belongsToMany('App\User');
    }

    public function createFirstRound()
    {
        $competitors = User::all()->random(16);
        $this->users()->attach($competitors);
    }
}
