@extends('layouts.app')

@section('title')
E-Recruitment | PT.LEN
@endsection

@section('content')

<!--====== SERVICES PART START ======-->

<section id="panduan" class="services-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-title pb-10">
                    <h4 class="title ">PANDUAN</h4>
                </div> <!-- section title -->
                <div class="service">
                     {{-- <button class="main-btn">Panduan Selengkapnya</button> --}}
                </div>
            </div>
        </div> <!-- row -->
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-md-6">
                        <div class="services-content mt-40 d-sm-flex">
                            <div class="services-icon">
                                <i class="lni-users"></i>
                            </div>
                            <div class="services-content media-body">
                                <h4 class="services-title">1.Daftar Akun</h4>
                                {{-- <p class="text">Short description for the ones</br> who look for something new.</p> --}}
                            </div>
                        </div> <!-- services content -->
                    </div>
                    <div class="col-md-6">
                        <div class="services-content mt-40 d-sm-flex">
                            <div class="services-icon">
                                <i class="lni-files"></i>
                            </div>
                            <div class="services-content media-body">
                                <h4 class="services-title">2.Lengkapi Data Diri</h4>
                                {{-- <p class="text">Short description for the ones</br> who look for something new.</p> --}}
                            </div>
                        </div> <!-- services content -->
                    </div>
                    <div class="col-md-6">
                        <div class="services-content mt-40 d-sm-flex">
                            <div class="services-icon">
                                <i class="lni-tab"></i>
                            </div>
                            <div class="services-content media-body">
                                <h4 class="services-title">3.Mengajukan Lamaran</h4>
                                {{-- <p class="text">Short description for the ones</br> who look for something new.</p> --}}
                            </div>
                        </div> <!-- services content -->
                    </div>
                    <div class="col-md-6">
                        <div class="services-content mt-40 d-sm-flex">
                            <div class="services-icon">
                                <i class="lni-popup"></i>
                            </div>
                            <div class="services-content media-body">
                                <h4 class="services-title">4.Ikuti Seleksei & Pengumuman</h4>
                                {{-- <p class="text">Short description for the ones</br> who look for something new.</p> --}}
                            </div>
                        </div> <!-- services content -->
                    </div>
                </div> <!-- row -->
            </div> <!-- row -->
        </div> <!-- row -->
    </div> <!-- conteiner -->
    <div class="services-image d-lg-flex align-items-center">
        <div class="image">
            <img src="landing/assets/images/panduan.png" alt="Services">
        </div>
    </div> <!-- services image -->
</section>

<!--====== SERVICES PART ENDS ======-->

<!--====== CALL TO ACTION PART START ======-->

<section id="call-to-action" class="call-to-action">
    <div class="call-action-image">
        <img src="landing/assets/images/kenapa.png" alt="call-to-action">
    </div>

    <div class="container-fluid">
        <div class="row justify-content-end">
            <div class="col-lg-6">
                <div class="call-action-content text-left">
                    <h1 class="call-title">Kenapa PT.LEN Cocok Untukmu?</h1>
                       <p class="text">Kami perusahaan yang mengedepankan SDM sebagai aset perusahaan yang harus dipelihara dan dikembangkan untuk mencapai VISi PT Len Industri agar Menjadi Perusahaan Teknologi Kelas Dunia yang Terpercaya.</p>
                    <div class="call-newsletter">
                       <a href="https://www.len.co.id/kontak/">
                        <button type="submit">Tentang Kami</button></a>
                    </div>
                    <div class="call-newsletter1">
                        <a href="https://www.len.co.id/"> 
                        <button type="submit" >Hubungi Kami</button></a>
                    </div>
                </div> <!-- slider-content -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

<!--====== CALL TO ACTION PART ENDS ======-->

<!--====== PRICING PART START ======-->

<section id="pricing" class="pricing-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center pb-10">
                        <h4 class="title">Pengumuman</h4>
                        <p class="text">Memberikan sebuah informasi resmi dari kami untuk kalian penerima informasi!</p>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row justify-content-center">             
                  @foreach ($pengumuman as $pengumuman)
                <div class="col-lg-4 col-md-7 col-sm-9">
                    <div class="single-pricing mt-40">
                        <div class="pricing-header text-center">
                        <h5 class="sub-title">{{ $pengumuman->judul }}</h5>
                        </div>
                        <div class="pricing-list">
                            <ul>
                                <li><i class=""></i>{!!strlen($pengumuman->deksripsi) > 500 ? substr($pengumuman->deksripsi,0,500) : $pengumuman->deksripsi!!}</li>
                            </ul>
                        </div>
                        <div class="pricing-btn text-center">
                        <a class="main-btn" href="{{ route('pengumuman', $pengumuman->id) }}">Lihat Selengkapnya</a>
                        </div>
                        <div class="buttom-shape">
                            <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 350 112.35"><defs><style>.color-1{fill:#2bdbdc;isolation:isolate;}.cls-1{opacity:0.1;}.cls-2{opacity:0.2;}.cls-3{opacity:0.4;}.cls-4{opacity:0.6;}</style></defs><title>bottom-part1</title><g id="bottom-part"><g id="Group_747" data-name="Group 747"><path id="Path_294" data-name="Path 294" class="cls-1 color-1" d="M0,24.21c120-55.74,214.32,2.57,267,0S349.18,7.4,349.18,7.4V82.35H0Z" transform="translate(0 0)"/><path id="Path_297" data-name="Path 297" class="cls-2 color-1" d="M350,34.21c-120-55.74-214.32,2.57-267,0S.82,17.4.82,17.4V92.35H350Z" transform="translate(0 0)"/><path id="Path_296" data-name="Path 296" class="cls-3 color-1" d="M0,44.21c120-55.74,214.32,2.57,267,0S349.18,27.4,349.18,27.4v74.95H0Z" transform="translate(0 0)"/><path id="Path_295" data-name="Path 295" class="cls-4 color-1" d="M349.17,54.21c-120-55.74-214.32,2.57-267,0S0,37.4,0,37.4v74.95H349.17Z" transform="translate(0 0)"/></g></g></svg>
                        </div>
                    </div> <!-- single pricing -->
                </div>
                @endforeach
 
            </div> <!-- row -->
        </div> <!-- conteiner -->
    </section>

<!--====== PRICING PART ENDS ======-->

@endsection
