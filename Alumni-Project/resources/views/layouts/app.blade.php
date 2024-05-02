<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title','Alumni Network Platform')</title>

     
    <link rel="stylesheet" href="{{asset('assets//css/main.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets//css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets//css/color.css')}}">
    <link rel="stylesheet" href="{{asset('assets//css/responsive.css')}}">

    @include('layouts.includes.javascripts')
    
</head>
<body>
    <div class="theme-layout">
        @include('layouts.includes.header')
        @stack('bodycontent','')
    </div>
</body>
</html>

