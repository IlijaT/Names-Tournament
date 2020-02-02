 
<header class="main_menu_area">
    <nav  class="navbar navbar-expand-md navbar-light navbar-laravel">
        <div class="container">
           
            <div class="d-flex align-content-start">
                <a class="navbar-brand text-info" href="{{ route('welcome') }}">
                    {{ config('app.name', 'Laravel') }}  
                </a>
            </div>
       

            <div id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('rankings') }}" >Rankings</a>
                    </li>
                
                </ul>
            </div>
        </div>
    </nav>
</header> 
