<?php

namespace App\Http\Livewire;

use App\User;
use Livewire\Component;
use Livewire\WithPagination;

class RankingsTable extends Component
{
    use WithPagination;

    public $perPage = 20;
    public $sortField = 'points';
    public $sortAsc = false;
    public $search = '';

    public function sortBy($field)
    {
        if ($this->sortField === $field) {
            $this->sortAsc = !$this->sortAsc;
        } else {
            $this->sortAsc = true;
        }
        $this->sortField = $field;
    }

    public function render()
    {
        if( $this->sortField === 'success') {

            $sql = $this->sortAsc ? '(matches_played / wins_count) desc' : '(matches_played / wins_count) asc';

            return view('livewire.rankings-table', [
                'users' => User::search($this->search)
                    ->where('matches_played', '>', 0)
                    ->orderByRaw($sql)
                    ->paginate($this->perPage)
            ]);
        }
        return view('livewire.rankings-table', [
            'users' => User::search($this->search)
                ->orderBy($this->sortField, $this->sortAsc ? 'asc' : 'desc')
                ->paginate($this->perPage)
        ]);
    }
}
