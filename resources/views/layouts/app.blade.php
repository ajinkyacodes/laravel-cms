<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/bootstrap-4.3.1/bootstrap.min.css')}}">
</head>
<body>
    @include('inc.header')
    <main>
        <div id="app">
            <div class="container">
                @include('inc.messages')
                @yield('content')
            </div>
        </div>
    </main>
    @include('inc.footer')
    <script src="{{asset('assets/js/jQuery3.5.1.js')}}"></script>
    <script src="{{asset('assets/vendor/bootstrap-4.3.1/bootstrap.min.js')}}"></script>
    <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('.ckeditor').ckeditor();
        });
    </script>
    <script src="{{asset('assets/js/script.js')}}"></script>
</body>
</html>
