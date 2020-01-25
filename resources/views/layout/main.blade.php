<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="icon" type="image/png" sizes="56x56" href="/images/favicon.png">
        <title>@yield('page-title')</title>
        @include('layout.assets.css')
    </head>
    <body>
        @yield('body')
        @include('layout.assets.js')
    </body>
</html>
