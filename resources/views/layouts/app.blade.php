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
    function cobalogin() {
        if (document.getElementById('email_coba').value == 'luthfi@coba.com') {
            window.open("/dashboard", "_self");
        } else if (document.getElementById('email_coba').value == 'agent@coba.com') {
            window.open("/dashboardAgent", "_self")
        }
    }
</script>
</body>
</html>