<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{config('app.name', 'Laravel-CMS')}}</title>
        <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('assets/vendor/bootstrap-4.3.1/bootstrap.min.css')}}">
    </head>
    <body>
        @include('inc.navbar')
        <div class="container">
            @yield('content')            
        </div>
    </body>
    <script src="{{asset('assets/js/jQuery3.5.1.js')}}"></script>
    <script src="{{asset('assets/js/script.js')}}"></script>
</html>
