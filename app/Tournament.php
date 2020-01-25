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
}
