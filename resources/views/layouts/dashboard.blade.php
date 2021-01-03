<!doctype html>
<html lang="en">

<head>

    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--====== Title ======-->
    <title>@yield('title')</title>

    {{-- style.css --}}
    {{-- @stack('prepend-style') --}}
    @include('includes.dashboard.style-dashboard')
    {{-- @stack('addon-style') --}}
</head>

<body>
    {{-- sidebar --}}
    @include('includes.dashboard.sidebar-dashboard')
    {{-- navbar/header --}}
    @include('includes.dashboard.navbar-dashboard')
    {{-- Page Content --}}
    @yield('content')
    {{-- Footer --}}
    {{-- @include('includes.dashboard.footer-dashboard') --}}
</body>
    {{-- @stack('prepend-script') --}}
    @include('includes.dashboard.script-dashboard')
    {{-- @stack('addon-script') --}}
</html>
