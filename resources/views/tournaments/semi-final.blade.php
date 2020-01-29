@extends('layouts.master')

 

@section('content')

<div class="container pt-5">
    <section class="row justify-content-md-center">
         
      
      <div class="col-sm-12 col-md-8">
        
        <h1 class="text-center mb-4">Semi Final</h1>

          @include('layouts._errors')
        
          <form action="{{ route('finals.store', $tournament) }}" method="POST" >
            @csrf
            <ul class="list-group">

              @foreach ($semiFinalists->chunk(2) as $index => $chunk)
                
                <li class="list-group-item d-flex justify-content-between align-items-center mb-3 shadow-lg rounded-lg">
                  @foreach ($chunk as $user)
                    @if ($loop->odd)
                      <div class="h4">
                        {{ $user->full_name}}
                        <input 
                          type="radio" 
                          name="participants[{{$index}}]" 
                          value="{{$user->id}}" 
                          {{ isset(old("participants")[$index]) && old("participants")[$index] == $user->id ? 'checked' : '' }}>
                        {{-- <span class="badge badge-primary badge-pill">srce</span> --}}
                      </div> 
                      <div>
                          :
                      </div>
                    @else
                      <div class="h4">
                        {{-- <span class="badge badge-primary badge-pill">srce</span> --}}
                        <input 
                          type="radio" 
                          name="participants[{{$index}}]" 
                          value="{{$user->id}}"
                          {{ isset(old("participants")[$index]) && old("participants")[$index] == $user->id ? 'checked' : '' }}>
                        {{ $user->full_name}}
                      </div> 
                    @endif
                  @endforeach
                </li>
              @endforeach

            </ul>

            <div class="d-flex justify-content-center mt-3">
                <button class="btn submit_btn" type="submit">Submit Results</button>
            </div>
          </form>
      </div>      
    </section>
</div>
@endsection

 