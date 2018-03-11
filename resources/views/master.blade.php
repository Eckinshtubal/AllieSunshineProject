<?php
/**
 * Created by PhpStorm.
 * User: steve
 * Date: 2018-03-07
 * Time: 8:44 AM
 */
?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/master.css')}}" rel="stylesheet">
</head>
<div>
    <div class="nav">
        <ul>
            <li class="active"><a href="{{ url('') }}">Home</a></li>
            <li><a href="{{ url('aboutus') }}">About Us</a></li>
            <li><a href="{{ url('getinvolved') }}">Get Involved</a></li>
            <li><a href="{{ url('shop') }}">Shop</a></li>
            <li><a href="{{ url('whatsnew') }}">Whats New</a></li>
            <li><a href="{{ url('gallery') }}">Gallery</a></li>
            <li><a href="{{ url('contact') }}">Contact Us</a></li>
            <li class="active"><a href="{{ url('home') }}">Login</a></li>
        </ul>

    </div>
    <br/>
    <br />
    <br />
    @yield('content')
</div>
<footer>

</footer>