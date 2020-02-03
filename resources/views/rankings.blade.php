@extends('layouts.master')

@section('navbar')

@include('layouts._header')

@endsection

@section('content')


<div class="container">
    {{ dd('pre livewire') }}
    @livewire('rankings-table')
</div>

@endsection

