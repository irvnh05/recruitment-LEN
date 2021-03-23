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
                  <img src="/landing/assets/images/LogoLen.svg" >
              </div>
              <div class="sidebar-menu">
                  <ul class="menu">
                      <li class='sidebar-title'>Main Menu</li>
                      <li class="sidebar-item active ">
                          <a href="{{ route('beranda') }}" class='sidebar-link'>
                              <i data-feather="home" width="20"></i>
                              <span>Beranda</span>
                          </a>

                      </li>

                      <li class="sidebar-item ">
                          <a href="{{ route('lamaran.index') }}" class='sidebar-link'>
                              <i data-feather="file-text" width="20"></i>
                              <span>Lamaran</span>
                          </a>

                      </li>

                      <li class="sidebar-item ">
                          <a href="{{ route('lihatlowongan.index') }}" class='sidebar-link'>
                              <i data-feather="info" width="20"></i>
                              <span>Lowongan</span>
                          </a>

                      </li>



                      <li class="sidebar-item  has-sub">
                          <a href="#" class='sidebar-link'>
                              <i data-feather="user" width="20"></i>
                              <span>Data Personal</span>
                          </a>

                          <ul class="submenu ">

                                
                              <li>
                                  <a href="{{ route('datapribadi-store',Auth::user()->id) }}">Data Pribadi</a>
                              </li>
  
                              <li>
                                  <a href="{{ route('datakeluarga.index') }}">Data Keluarga</a>
                              </li>

                              <li>
                                  <a href="{{ route('pendidikanformal.index') }}">Pendidikan</a>
                              </li>

                              <li>
                                  <a href="{{ route('pengalamankerja.index') }}">Pekerjaan</a>
                              </li>

                              <li>
                                  <a href="{{ route('pengalamanorganisasi.index') }}">Penunjang</a>
                              </li>

                              <li>
                                  <a href="{{ route('lampiran.index') }}">Berkas Lampiran</a>
                              </li>

                          </ul>

                      </li>

                      <li class="sidebar-item ">
                          <a href="{{ route('pertanyaan') }}" class='sidebar-link'>
                              <i data-feather="edit" width="20"></i>
                              <span>Pertanyaan</span>
                          </a>

                      </li>

                  </ul>
              </div>
              <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
          </div>
      </div>
    {{-- navbar/header --}}
    @include('includes.dashboardv1.navbar-dashboard')
    {{-- Page Content --}}
    @yield('content')
    {{-- Footer --}}
    @include('includes.dashboardv1.footer-dashboard')
</body>
    {{-- @stack('prepend-script') --}}
    @include('includes.dashboardv1.script-dashboard')
    {{-- @stack('addon-script') --}}
</html>
