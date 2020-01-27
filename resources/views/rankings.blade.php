@extends('layouts.master')

{{-- @section('navbar')

@include('layouts._header')

@endsection --}}

@section('content')


<div class="container">
    @livewire('rankings-table')
</div>

 

@endsection

@section('footer')
    @include('layouts._footer')    
@endsection