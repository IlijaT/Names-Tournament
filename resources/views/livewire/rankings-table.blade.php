<div>
    <div class="row pt-5 mb-4">
        <div class="col form-inline">
            Per Page &nbsp;
            <select wire:model="perPage" class="form-control">
                <option>10</option>
                <option>25</option>
                <option>50</option>
            </select>
        </div>

        <div class="col">
            <input type="text" class="form-control" placeholder="search...">
        </div>
        
    </div>

    <div class="row">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col"><a wire:click.prevent="sortBy('first_name')" role="button" href="#">Ime</a></th>
                    <th scope="col"><a wire:click.prevent="sortBy('matches_played')" role="button" href="#">Br. Utakmica</a></th>
                    <th scope="col"><a wire:click.prevent="sortBy('name')" role="button" href="#">Br. Pobeda</a></th>
                    <th scope="col"><a wire:click.prevent="sortBy('name')" role="button" href="#">Br. Poraza</a></th>
                    <th scope="col"><a wire:click.prevent="sortBy('name')" role="button" href="#">pobede/porazi</a></th>
                    <th scope="col"><a wire:click.prevent="sortBy('name')" role="button" href="#">Br. Poraza</a></th>
                    <th scope="col"><a wire:click.prevent="sortBy('name')" role="button" href="#">Ukupno Bodova</a></th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $key => $user)
                    <tr>
                        <th scope="row">{{$users->firstItem() + $key}}</th>
                        <td>{{ $user->full_name }}</td>
                        <td>{{ $user->matches_played }}</td>
                        <td>{{ $user->wins_count }}</td>
                        <td>{{ $user->matches_played - $user->wins_count }}</td>
                        <td>{{ 75 }}</td>
                        <td>{{ 75 }}</td>
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
