<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

   
    protected $guarded = [];

 
 
    public function getFullNameAttribute()
    {
        return "{$this->first_name} {$this->last_name}";
    }

    public function tournaments()
    {
        return $this->belongsToMany('App\Tournament', 'tournament_user');
    }

    public function scopeSearch($query, $word)
    {
        return $query->where('first_name', 'like', "{$word}%");
    }
}
