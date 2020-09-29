<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css\app.css') }}">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ asset('css\app.css') }}">
    <!-- Styles -->
    <style>
         body  {
      background-image: url("https://images.pexels.com/photos/1809644/pexels-photo-1809644.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260");
      background-color: #cccccc;
      background-position: top;
      background-attachment: fixed;
    }
    .card { background-color: rgba(245, 245, 245, 0.4); }
        h1,h2,h3,h4,h5,small{
            color:aliceblue;
        }</style>
</head>
<body>
        @include('inc/navbar')
            <div class="container">@include('inc.messages')</div>
            <div>
                @yield('content')
            </div>


            <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
            <script>
                CKEDITOR.replace( 'article-ckeditor' );
            </script>

</body>
<div>@yield('botcontent') </div>
</html>
