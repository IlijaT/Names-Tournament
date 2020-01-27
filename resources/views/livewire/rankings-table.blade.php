<div>
    <div class="row mt-5 mb-4">
        <div class="col form-inline">
            Per Page &nbsp;
            <select class="form-control">
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
                    <th scope="col"><a href="http://">Ime</a></th>
                    <th scope="col"><a href="http://">Br. Utakmica</a></th>
                    <th scope="col"><a href="http://">Br. Pobeda</a></th>
                    <th scope="col"><a href="http://">Br. Poraza</a></th>
                    <th scope="col"><a href="http://">pobede/porazi</a></th>
                    <th scope="col"><a href="http://">Br. Poraza</a></th>
                    <th scope="col"><a href="http://">Ukupno Bodova</a></th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <th scope="row">1</th>
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
            {{-- pagination --}}
        </div>

        <div class="col text-right text-muted">
            Showing X to X out of X
        </div>
    </div>
</div>
