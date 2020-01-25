@extends('layouts.master')

 

@section('content')

<div class="container mt-5">
    <section class="row justify-content-md-center">
         
        <div class="col-sm-12 col-md-8">

          @if ($tournament->users->count() == 16)
            <h1 class="text-center">First Round</h1>
          @endif

          <form action="{{ route('quarter-final.store', $tournament) }}" method="POST">
            @csrf
            <ul class="list-group">

              @foreach ($tournament->users->chunk(2) as $index => $chunk)
                
                <li class="list-group-item d-flex justify-content-between align-items-center mb-3 shadow-lg rounded-lg">
                  @foreach ($chunk as $user)
                    @if ($loop->odd)
                      <div>
                        {{ $user->full_name}}
                        <input type="radio" name="participant-{{$index}}" value="{{$user->id}}">
                        {{-- <span class="badge badge-primary badge-pill">srce</span> --}}
                      </div> 
                      <div>
                          :
                      </div>
                    @else
                      <div>
                        {{-- <span class="badge badge-primary badge-pill">srce</span> --}}
                        <input type="radio" name="participant-{{$index}}" value="{{$user->id}}">
                        {{ $user->full_name}}
                      </div> 
                    @endif
                  @endforeach
                </li>
              @endforeach

            </ul>

            <div class="d-flex justify-content-center">
                <button class="btn submit_btn" type="submit">Submit Results</button>
            </div>
          </form>
      </div>      
    </section>
</div>
@endsection

 