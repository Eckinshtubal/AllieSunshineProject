<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Stylesheets -->
    <link href="{{ secure_asset('/public/vendors/css/normalize.css') }}" rel="stylesheet">
    <link href="{{ secure_asset('/public/vendors/css/grid.css') }}" rel="stylesheet">
    <link href="{{ secure_asset('/public/vendors/css/ionicons.css') }}" rel="stylesheet">
    <link href="{{ secure_asset('/public/resources/css/style.css') }}" rel="stylesheet">
    <link href="{{ secure_asset('/public/resources/css/queries.css') }}" rel="stylesheet">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,300italic" rel="stylesheet">

    <title>Allie Sunshine Project</title>
</head>
<body>
<header>
    <nav>
        <div class="row">
            <a class="mobile-nav-icon js--nav-icon"><i class="ion-navicon"></i></a>
            <a href="#"><img src={{ secure_asset('/public/resources/images/logo.png')}} alt="Logo" class="logo"></a>
            <ul class="main-nav js--main-nav">
                <li><a href="#features">Home</a></li>
                <li><a href="#features">About Us</a></li>
                <li><a href="#features">Blog</a></li>
                <li><a href="#features">Events</a></li>
                <li><a href="#features">Get Involved</a></li>
                <li><a href="#features">Contact</a></li>
            </ul>
            <ul class="main-nav-auth js--main-nav">
                <li><a href="#features">Login</a></li>
                <li><a href="#features">Sign Up</a></li>
            </ul>
        </div>
    </nav>
</header>

<section class="section-features" id="features">

</section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link href="{{ secure_asset('/public/resources/js/script.js') }}" rel="script">
</body>
</html>