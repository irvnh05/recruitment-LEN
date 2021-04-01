@extends('layouts.app')

@section('title')
    Lowongan Detail Page
@endsection

@section('content')
    <!-- Page Content -->

      <section class="store-gallery mb-3" id="gallery">
        <div class="container">
          <div class="row">
            <div class="col-lg-8" data-aos="zoom-in">
              <transition name="slide-fade" mode="out-in">
                  <img src="/landing/assets/images/details.png" class="detail-page" alt="Logo">
              </transition>
            </div>
            <div class="col-lg-2">
              <div class="row">
                <div
                  class="col-3 col-lg-12 mt-2 mt-lg-0"
                  v-for="(photo, index) in photos"
                  :key="photo.id"
                  data-aos="zoom-in"
                  data-aos-delay="100"
                >
                  <a href="#" @click="changeActive(index)">
                    <img
                      :src="photo.url"
                      class="w-100 thumbnail-image"
                      :class="{ active: index == activePhoto }"
                      alt=""
                    />
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <div class="store-details-container" data-aos="fade-up">
        <section class="store-heading">
          <div class="container">
            <div class="row">
            
              <div class="col-lg-8">
                <h2>Lowongan {{ $lowongan->posisi }}</h2>
                <h5><div class="owner">Rp {{ $lowongan->gaji }}</div></h5>
                <h5> <div class="owner">{{ $lowongan->program->name }}</div></h5>
                {{-- <div class="price">${{ number_format($data->price) }}</div> --}}
              </div>
              <div class="col-lg-2" data-aos="zoom-in">
                @auth

                    <form action="{{ route('lamar', $lowongan->id) }}" method="POST" enctype="multipart/form-data">
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
              </div>
            </div>
          </div>
        </section>
      </br>
        <section class="store-description">
                </br>
          <div class="container">
            <div class="row">
             <div class="col-12 col-lg-8">
                <h5> {!! $lowongan->deksripsi !!}</h5>
              </div>
            </div>
    
          </div>
        </section>

        <section class="store-description">
                </br>
          <div class="container">
            <div class="row">
             <div class="col-12 col-lg-8">
             Lebih Diutamakan: 
                <h5> {!! $lowongan->kriteria_penting !!}</h5>
              </div>
            </div>
    
          </div>
        </section>

      </div>
    </div>    </br></br></br></br></br></br>
@endsection



{{-- 
@push('addon-script')
    <script src="/vendor/vue/vue.js"></script>
    <script>
      var gallery = new Vue({
        el: "#gallery",
        mounted() {
          AOS.init();
        },
        data: {
          activePhoto: 0,
          photos: [
            @foreach ($data->galleries as $gallery)
            {
              id: {{ $gallery->id }},
              url: "{{ Storage::url($gallery->photos) }}",
            },
            @endforeach
          ],
        },
        methods: {
          changeActive(id) {
            this.activePhoto = id;
          },
        },
      });
    </script>
@endpush --}}