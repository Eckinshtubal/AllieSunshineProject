@extends('master')

@section('content')
    <h2>Gallery</h2>
    <div class="container">
        <img src="{{ asset('images/gallery/1.jpg') }}" alt="one" width="305" height="250">
        <img src="{{ asset('images/gallery/3.jpg') }}" alt="one" width="305" height="250">
        <img src="{{ asset('images/gallery/5.jpg') }}" alt="one" width="305" height="250">
        <img src="{{ asset('images/gallery/151.jpg') }}" alt="one" width="305" height="250">
        <img src="{{ asset('images/gallery/20170723_115228.jpg') }}" alt="one" width="305" height="250">
        <img src="{{ asset('images/gallery/20170727_190448.jpg') }}" alt="one" width="305" height="250">
        <img src="{{ asset('images/gallery/20170727_195648.jpg') }}" alt="one" width="305" height="250" class="img-rotate-7">
        <img src="{{ asset('images/gallery/20170727_195837.jpg') }}" alt="one" width="305" height="250">
        <img src="{{ asset('images/gallery/20170727_201553.jpg') }}" alt="one" width="305" height="250" class="img-rotate-9">
        <img src="{{ asset('images/gallery/IMG_5095.jpg') }}" alt="one" width="305" height="250">
        <img src="{{ asset('images/gallery/jeremy 2.jpg') }}" alt="one" width="305" height="250">
        <img src="{{ asset('images/gallery/Resized_20160927_101207.jpg') }}" alt="one" width="305" height="250">
    </div>


@endsection