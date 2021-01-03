@extends('layouts.dashboardv1')

@section('title')
     Success Page
@endsection

@section('content')
<br><br><br><br><br><br>
    <div class="page-content page-success ">
      <div class="section-success" data-aos="zoom-in">
        <div class="container">
          <div class="row align-items-center row-login justify-content-center">
            <div class="col-lg-6 text-center">
              <img src="" alt="" class="mb-4" />
              <h2>
               Selamat Lamaran Anda Akan Terkirim!
              </h2>
              <p>
                Silahkan tunggu informasi selanjutnya dari kami dan kami akan
                menginformasikan secepat mungkin!
              </p>
              <div>
                <a href="{{ route('lamaran.index') }}" class="btn btn-primary w-50 mt-4">
                  Lihat Update Status Lamaran
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection