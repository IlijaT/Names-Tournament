<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="Tatalovic Ilija">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="icon" href="../../../../favicon.ico">
    
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

        
        @livewireAssets
    </head>
    <body>
        
        @yield('navbar')   
        
        <div class="main_slider_area" id="wrapper">

            @yield('content') 

        </div>

        @yield('footer') 
        
    </body>
</html>