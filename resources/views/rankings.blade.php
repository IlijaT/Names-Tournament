@extends('layouts.master')

{{-- @section('navbar')

@include('layouts._header')

@endsection --}}

@section('content')
    <div class="container">
        <div class="row">
            <div class="table-responsive-sm mt-5">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Ime</th>
                            <th scope="col">Utakmica</th>
                            <th scope="col">Br. Pobeda</th>
                            <th scope="col">Br. Poraza</th>
                            <th scope="col">pobede/Porazi</th>
                            <th scope="col">Ukupno Bodova</th>
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
                                <td>{{ $user->points }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div> 
        </div>
    </div>

 

@endsection

@section('footer')
    @include('layouts._footer')    
@endsection