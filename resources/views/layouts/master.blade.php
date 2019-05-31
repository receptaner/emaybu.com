<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
<title>@yield('title', config('app.name'))</title>
@include('layouts.partials.head')
    @yield('head')
</head>
<body>
@include('layouts.partials.navbar')

@yield('content')

@include('layouts.partials.footer')