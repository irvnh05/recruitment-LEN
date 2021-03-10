@extends('layouts.app')

@section('title')
    Pengumuman Detail Page
@endsection

@section('content')
    <!-- Page Content -->

      <div class="store-details-container" data-aos="fade-up">
        <section class="store-heading">
          <div class="container">
            <div class="row">
            
              <div class="col-lg-8">
              <img 
                src="{{ Storage::url($pengumuman->photos ?? '') }}"
                alt=""
                class="bingkai_pengumuman"
              />
              </br></br>
                <h2> {{ $pengumuman->judul }}</h2>
                {{-- <div class="price">${{ number_format($data->price) }}</div> --}}
              </div>
              {{-- <div class="col-lg-2" data-aos="zoom-in">
                @auth

                    <form action="{{ route('lamar', $pengumuman->id) }}" method="POST" enctype="multipart/form-data">
                      @csrf
                      <button
                        type="submit"
                        class="btn btn-primary px-6 text-white btn-block mb-3"
                      >
                       Ajukan Lamaran
                      </button>
                    </form>
                @else
                    <a
                      href="{{ route('login') }}"
                      class="btn btn-primary px-6 text-white btn-block mb-3"
                    >
                      Buat Akun
                    </a>
                @endauth
              </div> --}}
            </div>
          </div>
        </section>
      </br>
        <section class="store-description">
                </br>
          <div class="container">
            <div class="row">
             <div class="col-12 col-lg-8">
                <h6> {!! $pengumuman->deksripsi !!}</h6>
              </div>
            </div>
    
          </div>
        </section>

      </div>
    </div>    </br></br></br></br></br></br>
@endsection



