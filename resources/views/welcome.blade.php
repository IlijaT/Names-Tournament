@extends('layouts.master')

@section('navbar')

    @include('layouts._header')
    
@endsection

@section('content')

    <section class="d-flex justify-content-center align-items-center" >
                        
        <span class="input-group-btn">
            <form action="{{ route('tournaments.store') }}" method="post">
                @csrf
                <button class="btn btn-secondary submit_btn" type="submit">Start Tournament</button>
            </form>
        </span>
        <div class="tp-caption tp-resizeme single_img">
            <img style=" width: 100%; 
            height: 100%; 
            object-fit: contain;" src="img/home-slider/slider-m-1.png" alt="">
        </div>
            
    </section>

@endsection

@section('footer')
    @include('layouts._footer')    
@endsection