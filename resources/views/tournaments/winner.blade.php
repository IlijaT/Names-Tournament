@extends('layouts.master')

@section('navbar')

    @include('layouts._header')
    
@endsection

@section('content')

    <div class="container pt-5">
        <section class="row justify-content-md-center pt-5" >
                        
            <span class="input-group-btn pl-2 ml-2 pt-5 mt-5">
                 
                <h1>Winner is {{ $winner->full_name}} !!!!!</h1>
                <h5>Thank you for participating in this tournaments!</h5>
                <form action="{{ route('tournaments.store') }}" method="post">
                    @csrf
                    <button class="btn btn-secondary submit_btn mt-5" type="submit">Start Tournament</button>
                </form>
                  
                 
            </span>
            <div class="tp-caption tp-resizeme single_img">
                <img src="{{ asset('img/home-slider/slider-m-1.png') }}" alt="">
            </div>
                
        </section>
    </div>


@endsection

@section('footer')
    @include('layouts._footer')    
@endsection