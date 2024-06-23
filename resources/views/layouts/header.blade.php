<!DOCTYPE html>
<html lang="en">

<head>
    
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- Normalize Css -->
    <link rel="stylesheet" href="/css/normalize.css">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <!-- Font Awesome Library -->
    <link rel="stylesheet" href="/css/all.min.css">
    <!-- Line Library -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <!-- Main css File -->
    <link rel="stylesheet" href="/css/style.css">

    @yield('css')

</head>

<body>
    <nav>
        <div class="logo">
            <a href="{{route('home')}}">DENTA<span>DIAGNOSE</span></a>
        </div>

        <div class="nav-links" id="navLinks">
            <i class="fa-solid fa-xmark" onclick="hideMenu()"></i>
            <ul>
                <li><a href="{{route('home')}}" class="active">Home</a></li>
                
                <?php $type = Auth::check() ? Auth::user()->type : 'dentist' ?>

                <li><a href='{{route("show.$type")}}'>Services</a></li>
                
                <li><a href="{{route('faq')}}">FAQ</a></li>
                <li><a href="{{route('contact')}}">Contact us</a></li>
            </ul>
            
             <!-- Authentication Links -->
             @guest
             @if (Route::has('login') || Route::has('register') )

             <div class="buttons">
                <a href="{{route('login')}}" class="btn" id="signIn" style="text-decoration:none;"> Sign in </a>
                <a href="{{route('register')}}" class="btn" id="signIn" style="text-decoration:none;"> Sign up </a>
            </div>
            
             @endif

         @else
         <div class="user">
            <span>O</span>
            <h2>{{ Auth::user()->firstname ." ".Auth::user()->secondname}}</h2>
          </div>
         @endguest
            
            {{-- <div class="buttons">
                <a href="{{route('login')}}" class="btn" id="signIn" style="text-decoration:none;"> Sign in </a>
                <a href="{{route('register')}}" class="btn" id="signIn" style="text-decoration:none;"> Sign up </a>
            </div> --}}

            <i class="fa-solid fa-bars" onclick="showMenu()"></i>
    </nav>

    @yield('content')

    @yield('footer')

    <script src="/js/denta.js"></script>

</body>

</html>