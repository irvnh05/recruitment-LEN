<!doctype html>
<html lang="en">

<head>

    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="landing/assets/images/LogoLen.png" type="image/x-icon">
    <!--====== Title ======-->
    <title>@yield('title')</title>

    {{-- style.css --}}
    {{-- @stack('prepend-style') --}}
    @include('includes.dashboardv1.style-dashboard')
    {{-- @stack('addon-style') --}}
</head>

<body>
    {{-- sidebar --}}
    <div id="app">
        <div id="sidebar" class='active'>
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <img src="/dashboardv1/docs/assets/images/admin-ui.svg">
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class='sidebar-title'>Main Menu</li>
                        <li class="sidebar-item active ">
                            <a href="{{ route('admin-dashboard') }}" class='sidebar-link'>
                                <i data-feather="home" width="20"></i>
                                <span>Beranda</span>
                            </a>

                        </li>

                        <li class="sidebar-item ">
                            <a href="{{ route('program.index') }}" class='sidebar-link'>
                                <i data-feather="file" width="20"></i>
                                <span>Program</span>
                            </a>

                        </li>

                        <li class="sidebar-item ">
                            <a href="{{ route('lowongan.index') }}" class='sidebar-link'>
                                <i data-feather="file-text" width="20"></i>
                                <span>Lowongan</span>
                            </a>

                        </li>

                        <li class="sidebar-item ">
                            <a href="{{ route('soal.index') }}" class='sidebar-link'>
                                <i data-feather="info" width="20"></i>
                                <span>Pertanyaan</span>
                            </a>

                        </li>

                        <li class="sidebar-item ">
                            <a href="{{ route('pengumuman.index') }}" class='sidebar-link'>
                                <i data-feather="volume-2" width="20"></i>
                                <span>Pengumuman</span>
                            </a>

                        </li>

                        <li class="sidebar-item ">
                            <a href="{{ route('user.index') }}" class='sidebar-link'>
                                <i data-feather="users" width="20"></i>
                                <span>User</span>
                            </a>

                        </li>

                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i data-feather="inbox" width="20"></i>
                                <span>Pelamar</span>
                            </a>

                            <ul class="submenu ">

                                <li>
                                    <a href="{{ route('pelamar.index') }}">Lihat Lamaran</a>
                                </li>

                            </ul>

                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i data-feather="archive" width="20"></i>
                                <span>Report</span>
                            </a>

                            <ul class="submenu ">

                                <li>
                                    <a href="{{ route('report.index') }}">Pelamar</a>
                                </li>

                            </ul>

                        </li>

                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>
        {{-- navbar/header --}}
       <div id="main">
            <nav class="navbar navbar-header navbar-expand navbar-light">
                <a class="sidebar-toggler" href="#"><span class="navbar-toggler-icon"></span></a>
                <button class="btn navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav d-flex align-items-center navbar-light ml-auto">
                        <li class="dropdown">
                            <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                                <div class="d-none d-md-block d-lg-inline-block">Hi, {{ Auth::user()->name }}</div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#"><i data-feather="user"></i> Account</a>
                                <a class="dropdown-item" href="#"><i data-feather="settings"></i> Settings</a>
                                <div class="dropdown-divider"></div>
                                {{-- <a class="dropdown-item" href="{{ route('logout') }}"><i data-feather="log-out"></i> Logout</a> --}}
                                                        <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                               Logout
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        {{-- Page Content --}}
        @yield('content')
        {{-- Footer --}}
        @include('includes.dashboardv1.footer-dashboard')
</body>
{{-- @stack('prepend-script') --}}
@include('includes.dashboardv1.script-dashboard')
{{-- @stack('addon-script') --}}

</html>
