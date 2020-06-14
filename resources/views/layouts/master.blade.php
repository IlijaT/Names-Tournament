<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="Tatalovic Ilija">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="icon" href="{{ asset('img/b_logo.png') }}">
    
        <title>{{ config('app.name', 'Names-Tournament') }}</title>
    
    
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    
        {{-- Favicon --}}
        {{-- <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}"> --}}
    
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
        <!-- Custom styles for this template -->
        <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">

        <style type="text/css">
            html, body {
                height: 100%;
                margin: 0;
            }
    
            #wrapper {
                min-height: 100%; 
            }
        </style>

    @livewireStyles
    </head>
    <body >
        @yield('navbar')   
        
        <div class="main_slider_area pt-2" id="wrapper">

            @yield('content') 

        </div>

        @yield('footer') 
        
        @livewireScripts 
    </body>
</html>