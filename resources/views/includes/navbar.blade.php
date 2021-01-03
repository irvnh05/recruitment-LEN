    <header class="header-area">
        <div class="navgition navgition-transparent">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand" href="#">
                                <img src="/landing/assets/images/Len.png" alt="Logo">
                            </a>

                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarOne" aria-controls="navbarOne" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarOne">
                                <ul class="navbar-nav m-auto">
                                    <li class="nav-item ">
                                        <a class="page-scroll" href="{{ route('home') }}">Beranda</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="{{ route('home') }}#panduan">Panduan</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="{{ route('lowongan') }}">Lowongan</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="{{ route('home') }}#pengumuman">Pengumuman</a>
                                    </li>
                                    @guest
                                        <li class="nav-item">
                                        <a class="page-scroll" href="{{ route('login') }}">Masuk</a>
                                    </li>
                                    @endguest
                                    @auth
                                                                             <!-- Desktop Menu -->
          <ul class="navbar-nav d-none d-lg-flex" >
            <li class="nav-item dropdown">
              <a
                href="#"
                class="nav-link"
                id="navbarDropdown"
                role="button"
                data-toggle="dropdown"
              >
                <img
                  src="/images/icon-user.png"
                  alt=""
                  class="rounded-circle mr-2 profile-picture"
                />
                Hi, {{ Auth::user()->name }}
              </a>
              <div class="dropdown-menu">
@if (Auth::user()->roles =='ADMIN')
              <a href="{{ route('admin-dashboard') }}" class="dropdown-item">Dashboard</a>
@else
                <a href="{{ route('beranda') }}" class="dropdown-item">Dashboard</a>
@endif
                <div class="dropdown-divider"></div>
                                                           <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                               Logout
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
              </div>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link d-inline-block mt-2">
                <img src="/images/icon-cart-empty.svg" alt="" />
              </a>
            </li>
          </ul>

          {{-- <ul class="navbar-nav d-block d-lg-none">
            <li class="nav-item">
              <a href="#" class="nav-link">
                Hi, Angga
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link d-inline-block">
                Cart
              </a>
            </li>
          </ul> --}}
                                    @endauth
                                </ul>
                            </div>

                            <div class="navbar-social d-none d-sm-flex align-items-center">
                                <span>FOLLOW US</span>
                                <ul>
                                    <li><a href="http://www.facebook.com/LenIndustri"><i class="lni-facebook-filled"></i></a></li>
                                    <li><a href="http://www.twitter.com/LenIndustri"><i class="lni-twitter-original"></i></a></li>
                                    <li><a href="http://www.instagram.com/lenindustri"><i class="lni-instagram-original"></i></a></li>
                                    <li><a href="http://www.linkedin.com/LenIndustri"><i class="lni-linkedin-original"></i></a></li>                                  
                                </ul>
                            </div>
                        </nav> <!-- navbar -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- navgition -->

        <div id="home" class="header-hero bg_cover" style="background-image: url(/landing/assets/images/header1.jpg)">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-10">
                        <div class="header-content text-center">
                            <h3 class="header-title">Selamat Datang</h3>
                            <p class="text">E-Recruitment PT LEN</p>
                            <ul class="header-btn">
                                <li><a class="main-btn btn-one" href="{{ route('lowongan') }}">Lihat Lowongan</a></li>
                            </ul>
                        </div> <!-- header content -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
            <div class="header-shape">
                <img src="/landing/assets/images/header-shape.svg" alt="shape">
            </div>
        </div> <!-- header content -->
    </header>
