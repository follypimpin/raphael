<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap CSS -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    <title>@yield('title')</title>


    <!-- Bootstrap Material Design -->

    <!-- Bootstrap core JavaScript -->
    <script src="{{ mix('js/app.js') }}" defer></script>


</head>

<body>
<div class="container">
@include('layouts.partials.nav')

@yield('content')
</div>
</body>
</html>
