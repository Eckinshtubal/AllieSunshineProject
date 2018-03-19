<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Stylesheets -->
    <link href="{{ secure_asset('../public/vendors/css/normalize.css') }}" rel="stylesheet">
    <link href="{{ secure_asset('../public/vendors/css/grid.css') }}" rel="stylesheet">
    <link href="{{ secure_asset('../public/vendors/css/ionicons.css') }}" rel="stylesheet">
    <link href="{{ secure_asset('../public/resources/css/style.css') }}" rel="stylesheet">
    <link href="{{ secure_asset('../public/resources/css/queries.css') }}" rel="stylesheet">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,300italic" rel="stylesheet">

    <title>Allie Sunshine Project</title>
</head>
<body>
<header>
    <nav>
        <div class="row">
            <a class="mobile-nav-icon js--nav-icon"><i class="ion-navicon"></i></a>
            <a href="#"><img src={{ secure_asset('../public/resources/images/logo.png')}} alt="Logo" class="logo"></a>
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
    <div class="header-image">
    </div>
    <div class="header-background-textbox">
        <h1>Become a Ray of Sunshine Today!</h1>
        <a class="btn btn-full js--scroll-to-plans" href="#">Get Involved</a>
        <a class="btn btn-ghost js--scroll-to-start" href="#">Donate</a>
    </div>
</header>

<section class="section-features" id="features">
    <div class="row wrap">
        <h2>About Allie</h2>
        <p class="long-copy">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. </p>
    </div>
    <div class="row wrap">
        <div class="col span-1-of-2 box">
            <h3>What is Lorem Ipsum</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        </div>

        <div class="col span-1-of-2 box box--margin-top">
            <h3>What language is it</h3>
            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose.
            </p>
        </div>
    </div>
</section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link href="{{ secure_asset('/public/resources/js/script.js') }}" rel="script">
</body>
</html>