@extends('layouts.dashboardv1')

@section('title')
     Data Belum Lengkap
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
              Maaf anda belum melengkapi kelengkapan data untuk pengajuan lamaran!
              </h2>
              <p>
                Silahkan seleseikan proses kelengkapan data.
              </p>
              <div>
                <a href="{{ route('datapribadi-store',Auth::user()->id) }}" class="btn btn-primary w-50 mt-4">
                  Lengkapi Sekarang
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection