@extends('layouts.master')

@section('navbar')

@include('layouts._header')

@endsection

@section('content')


<div class="container">
    @livewire('rankings-table')
    {{ dd('posle verovano tpuca livewire') }}
</div>

@endsection

