@extends('layouts.master')

 

@section('content')

<div class="container pt-5">
    <section class="row justify-content-md-center pt-5">
         
      
      <div class="col-sm-12 col-md-8">
        
        <h1 class="text-center mt-2 mb-4 p-4">Final</h1>

          @include('layouts._errors')
        
          <form action="{{ route('winners.store', $tournament) }}" method="POST">
            @csrf
            <ul class="list-group">
                
              <li class="list-group-item d-flex justify-content-between align-items-center mb-3 shadow-lg rounded-lg">
                  @foreach ($finalists as $index => $user)
                  @if ($loop->odd)
                    <first-participant :user="{{$user}}" :index="0" :old="{{ old("participants")[$index] ?? 'null' }}"></first-participant>
                    <div>:</div>
                  @else
                    <second-participant :user="{{$user}}" :index="0" :old="{{ old("participants")[$index] ?? 'null' }}"></second-participant>
                  @endif
                  @endforeach
              </li>

            </ul>

            <div class="d-flex justify-content-center mt-3">
                <button class="btn submit_btn" type="submit">Submit Results</button>
            </div>
          </form>
      </div>      
    </section>
</div>
@endsection

 