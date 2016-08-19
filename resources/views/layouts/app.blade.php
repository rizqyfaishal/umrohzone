<!doctype html>
<html lang="en">
<!-- Chatra {literal} -->
{{--<script>--}}
    {{--ChatraID = '5LGb3BvwKLyEJc5Ah';--}}
    {{--(function(d, w, c) {--}}
        {{--var n = d.getElementsByTagName('script')[0],--}}
                {{--s = d.createElement('script');--}}
        {{--w[c] = w[c] || function() {--}}
                    {{--(w[c].q = w[c].q || []).push(arguments);--}}
                {{--};--}}
        {{--s.async = true;--}}
        {{--s.src = (d.location.protocol === 'https:' ? 'https:': 'http:')--}}
                {{--+ '//call.chatra.io/chatra.js';--}}
        {{--n.parentNode.insertBefore(s, n);--}}
    {{--})(document, window, 'Chatra');--}}
{{--</script>--}}
<!-- /Chatra {/literal} -->

{{--chatranya luthfi di bawah ini--}}
<!-- Chatra {literal} -->
<script>
    ChatraID = '9hH5v5fNtBA3uRtuM';
    (function(d, w, c) {
        var n = d.getElementsByTagName('script')[0],
                s = d.createElement('script');
        w[c] = w[c] || function() {
                    (w[c].q = w[c].q || []).push(arguments);
                };
        s.async = true;
        s.src = (d.location.protocol === 'https:' ? 'https:': 'http:')
                + '//call.chatra.io/chatra.js';
        n.parentNode.insertBefore(s, n);
    })(document, window, 'Chatra');
</script>
<!-- /Chatra {/literal} -->

<head>
    <meta charset="UTF-8">
    <title>{{ $page->getTitle() }}</title>
    <meta name="description" content="{{ $page->getDescription() }}">
    <meta name="keyword" content="{{ $page->getKeyword() }}">
    <meta name="author" content="{{ $page->getAuthor() }}">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=0.9, maximum-scale=0.9, minimum-scale=0.9">
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap-theme.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/landing-page.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/slick.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/slick-theme.css') }}">
    <link rel="shortcut icon" href="{{ URL::asset('img/favicon.ico') }}" type="image/x-icon">
    <link rel="icon" href="{{ URL::asset('img/favicon.ico') }}" type="image/x-icon">

    <script src="{{ URL::asset('js/jquery-2.2.1.min.js') }}"></script>
    @yield('angular-css')
    @yield('angular-js')
    @yield('data-tables-css')
    @yield('select2-css')
    @yield('fotorama-css')
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
    @yield('ajax-image-css')

    {{--docs nya ada di sini : http://www.eyecon.ro/bootstrap-datepicker/#--}}
    <link rel="stylesheet" href="{{ URL::asset('css/datepicker.css') }}">

    @yield('date-time-picker')
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
{{--<script>--}}

    {{--if(window.location.href == "https://umrohzone.com/beta/v3/dashboard") {--}}
        {{--document.getElementById("cobalogin").innerHTML = "Logout";--}}
    {{--}--}}
    {{--if(window.location.href == "http://umrohzone.com/beta/v3/dashboard") {--}}
        {{--document.getElementById("cobalogin").innerHTML = "Logout";--}}
    {{--}--}}
    {{--if(window.location.href == "http://umrohzone.com/beta/v3/dashboardAgent") {--}}
        {{--document.getElementById("cobalogin").innerHTML = "Logout";--}}
    {{--}--}}
    {{--if(window.location.href == "http://umrohzone.com/beta/v3/dashboardAgent") {--}}
        {{--document.getElementById("cobalogin").innerHTML = "Logout";--}}
    {{--}--}}

{{--</script>--}}

{{--script datepicker--}}
@yield('date-picker')
{{--end of script datepicker--}}
@yield('fotorama-js')
@yield('ajax-image-js')
@yield('select2-js')
@yield('data-tables-js')
@yield('additional-script')
</body>
</html>