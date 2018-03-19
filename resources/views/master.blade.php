<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Stylesheets -->
    <link href="{{ URL::asset('vendors/css/normalize.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('vendors/css/grid.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('vendors/css/ionicons.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('resources/css/style.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('resources/css/queries.css') }}" rel="stylesheet">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,300italic" rel="stylesheet">

    <title>Allie Sunshine Project</title>
</head>
<body>
<header>
    <nav>
        <div class="row">
            <a class="mobile-nav-icon js--nav-icon"><i class="ion-navicon"></i></a>
            <a href="#"><img src={{ URL::asset('resources/images/logo.png')}} alt="Logo" class="logo"></a>
            <ul class="main-nav js--main-nav">
                <li><a href="{{ url('index') }}">Home</a></li>
                <li><a href="{{ url('about') }}">About Us</a></li>
                <li><a href="{{ url('blog') }}">Blog</a></li>
                <li><a href="{{ url('gallery') }}">Gallery</a></li>
                <li><a href="{{ url('whatsnew') }}">Events</a></li>
                <li><a href="{{ url('getinvolved') }}">Get Involved</a></li>
                <li><a href="{{ url('contact') }}">Contact</a></li>
            </ul>
            <ul class="main-nav-auth js--main-nav">
                <li><a href="{{ url('home') }}">Login</a></li>
                <li><a href="{{ url('home') }}">Sign Up</a></li>
            </ul>
        </div>
    </nav>
    @yield('content')
</header>
    @yield('main-body')
<footer>

</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link href="{{ URL::asset('resources/js/script.js') }}" rel="script">
</body>
</html>