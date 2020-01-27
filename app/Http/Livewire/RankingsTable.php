<?php

namespace App\Http\Livewire;

use App\User;
use Livewire\Component;

class RankingsTable extends Component
{
    public function render()
    {
        return view('livewire.rankings-table', [
            'users' => User::orderBy('points', 'desc')->paginate(10)
        ]);
    }
}
