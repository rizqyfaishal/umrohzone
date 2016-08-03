<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $page->getTitle() }}</title>
    <meta name="description" content="{{ $page->getDescription() }}">
    <meta name="keyword" content="{{ $page->getKeyword() }}">
    <meta name="author" content="{{ $page->getAuthor() }}">
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap-theme.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/landing-page.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/slick.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
    <script src="{{ URL::asset('js/jquery-2.2.1.min.js') }}"></script>
</head>
<body>
@include('partials._navbar')
<div class="content">
    @yield('content')
</div>
@include('partials._footer')
<script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
<script src="{{ URL::asset('js/slick.min.js') }}"></script>
<script src="{{ URL::asset('js/script.js') }}"></script>
<script>
    $(document).ready(function(){
        $('.slick-fade').slick({
            dots: true,
            infinite: true,
            speed: 500,
            fade: true,
            cssEase: 'linear'
        });
    });
</script>
<script>

    if(window.location.href == "https://umrohzone.com/beta/v3/dashboard") {
        document.getElementById("cobalogin").innerHTML = "Logout";
    }
    if(window.location.href == "http://umrohzone.com/beta/v3/dashboard") {
        document.getElementById("cobalogin").innerHTML = "Logout";
    }
    if(window.location.href == "http://umrohzone.com/beta/v3/dashboardAgent") {
        document.getElementById("cobalogin").innerHTML = "Logout";
    }
    if(window.location.href == "http://umrohzone.com/beta/v3/dashboardAgent") {
        document.getElementById("cobalogin").innerHTML = "Logout";
    }

</script>
</body>
</html>