<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tournament extends Model
{
    protected $guarded = [];

    public function getRoundNameAttribute()
    {
        return "{$this->first_name} {$this->last_name}";
    }


    public function users()
    {
        return $this->belongsToMany('App\User');
    }

    public function quarterFinalists()
    {
      
        return $this->users()->where('quarter_final', 1)->get();
        
    } 

    public function semiFinalists()
    {
      
        return $this->users()->where('semi_final', 1)->get();
        
    } 

    public function finalists()
    {
      
        return $this->users()->where('final', 1)->get();
        
    }  

    public function winner()
    {
      
        return $this->users()->where('winner', 1)->first();
        
    }   


    public function createFirstRound()
    {
        $competitors = User::all()->random(16)->shuffle();

        foreach ($competitors as $user) {
            $user->increment('matches_played');
        }

        $this->users()->attach($competitors);
    }

    public function isFirstRoundFinished() 
    {
        return count($this->quarterFinalists()) != 0 ? true : false; 
    }

    public function createQuarterFinal($quarterFinalists) 
    {
        
        foreach ($quarterFinalists as $user) {
            $user->increment('matches_played');
            $user->increment('wins_count');
            $user->increment('points', 10);
            $user->tournaments()->updateExistingPivot($this->id, ['quarter_final' => true]);
        }
    }

    public function isQuarterFinalFinished() 
    {
        return count($this->semiFinalists()) != 0 ? true : false; 
    }

    public function createSemiFinal($semifinalists) 
    {
        foreach ($semifinalists as $user) {
            $user->increment('matches_played');
            $user->increment('wins_count');
            $user->increment('points', 20);
            $user->tournaments()->updateExistingPivot($this->id, ['semi_final' => true]);
        }
    
    }

    public function isSemiFinalFinished() 
    {
        return count($this->finalists()) != 0 ? true : false; 
    }

    public function createFinal($finalists) 
    {
        foreach ($finalists as $user) {
            $user->increment('matches_played');
            $user->increment('wins_count');
            $user->increment('points', 30);
            $user->tournaments()->updateExistingPivot($this->id, ['final' => true]);
        }
    
    }

    public function createWinner($winner) 
    {
        $winner->increment('wins_count');
        $winner->increment('points', 40);
        $winner->tournaments()->updateExistingPivot($this->id, ['winner' => true]);
        
    }

    public function isFinished()
    {
        
        return $this->winner() ? true : false;
    }

}
