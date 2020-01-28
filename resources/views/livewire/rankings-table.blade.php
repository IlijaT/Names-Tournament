<div>
    <div class="row pt-5 mb-4">
        <div class="col form-inline">
            Per Page &nbsp;
            <select wire:model="perPage" class="form-control">
                <option>20</option>
                <option>30</option>
                <option>40</option>
            </select>
        </div>

        <div class="col">
            <input wire:model="search" type="text" class="form-control" placeholder="search...">
        </div>
        
    </div>

    <div class="row">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col"><a wire:click.prevent="sortBy('first_name')" role="button" href="#">
                        Ime
                        @include('includes._sort-icon', ['field' => 'first_name'])
                    </a></th>
                    <th scope="col"><a wire:click.prevent="sortBy('matches_played')" role="button" href="#">
                        Br. Utakmica
                        @include('includes._sort-icon', ['field' => 'matches_played'])
                    </a></th>
                    <th scope="col"><a wire:click.prevent="sortBy('wins_count')" role="button" href="#">
                        Br. Pobeda
                        @include('includes._sort-icon', ['field' => 'wins_count'])
                    </a></th>
                    <th scope="col"><a wire:click.prevent="sortBy('points')" role="button" href="#">
                        Ukupno Bodova
                        @include('includes._sort-icon', ['field' => 'points'])
                    </a></th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $key => $user)
                    <tr>
                        <th scope="row">{{$users->firstItem() + $key}}</th>
                        <td>{{ $user->full_name }}</td>
                        <td>{{ $user->matches_played }}</td>
                        <td>{{ $user->wins_count }}</td>
                        <td>{{ $user->points }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="row">

        <div class="col">
            {{ $users->links() }}
        </div>

        <div class="col text-right text-muted">
            Showing {{ $users->firstItem() }} to {{ $users->lastItem() }} out of {{ $users->total() }}
        </div>
    </div>
</div>