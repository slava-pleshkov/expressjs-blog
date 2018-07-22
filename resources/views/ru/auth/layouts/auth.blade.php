<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-param" content="_csrf-frontend">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') | {{ __('auth.admin-panel') }}</title>
    <link rel="author" href="{{ asset ('humans.txt')}}"/>
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset ('apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset ('favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset ('favicon-16x16.png')}}">
    <link rel="manifest" href="{{ asset ('site.webmanifest')}}">
    <link rel="mask-icon" href="{{ asset ('safari-pinned-tab.svg')}}" color="#4a6978">
    <meta name="msapplication-TileColor" content="#4a6978">
    <meta name="theme-color" content="#4a6978">
    <link href="{{ asset ('css/auth.css')}}" rel="stylesheet">
    {!! NoCaptcha::renderJs('ru') !!}
</head>
<body>
@yield('content')
<script src="{{ asset('js/auth.js')}}"></script>
</body>
</html>