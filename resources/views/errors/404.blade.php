<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}.'Page Not Found' ">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>404 - Page Not Found</title>
    <link rel="stylesheet" href="{{asset('assets/vendor/404-page/404-style.css')}}">
</head>
<body>
    @include('inc.404-content')
    <script src="{{asset('assets/vendor/404-page/cdn/TweenMax.min.js')}}"></script>
    <script src="{{asset('assets/vendor/404-page/cdn/MorphSVGPlugin.min.js')}}"></script>
    <script src="{{asset('assets/vendor/404-page/cdn/jquery-2.2.4.min.js')}}"></script>
    <script src="{{asset('assets/vendor/404-page/404-script.js')}}"></script>
</body>
</html>