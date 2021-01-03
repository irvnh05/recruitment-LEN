@extends('layouts.dashboardv1')

@section('title')
 Dara Pribadi
@endsection

@section('content')
<!-- Section Content -->
<div
  class="section-content section-dashboard-home"
  data-aos="fade-up"
>
  <div class="container-fluid">
    <div class="dashboard-heading">
      <h2 class="dashboard-title"> Dara Pribadi</h2>
      <p class="dashboard-subtitle">
        {{-- Make store that profitable --}}
      </p>
    </div>
    <div class="dashboard-content">
      <div class="row">
        <div class="col-12">
                        @php
                            $users = \App\Biodata::where('id', Auth::user()->id);
                        @endphp

          <form action="{{ route('datapribadi-redirect','datapribadi-store', $users ) }}" method="POST" enctype="multipart/form-data">
            @csrf
            
            <div class="card">
              <div class="card-body">
                <div class="row">

                <div class="col-12 col-md-4 ">
                  {{-- <input  type="file" name="foto"/> --}}
                  <div class="round">
                   <img
                    {{-- src="{{ Storage::url($item->first()->foto ?? '') }}" --}}
                    class=""
                    alt=""
                    height="200px" width="auto"        
                  /> 
                </div>
                  </div>
                {{-- <div class="col-12 col-md-8">

                      <div class="product-title">Foto</div>
                      <div class="product-subtitle">
                        <input type="file" class="form-control" name="foto" value="{{ Storage::url($item->first()->foto ?? '') }}"  />
                      </div> --}}

                <div class="col-12 col-md-8">
                  <div class="row">
                    <div class="col-12 col-md-6">
                      <div class="product-title">Foto</div>
                      <div class="product-subtitle">
                        <input type="file" class="form-control" name="foto"/>
                      </div>
                    </div>
             <div class="col-12 col-md-6">
                      <div class="product-title">Nama Lengkap</div>
                      <div class="product-subtitle">
                        <input class="form-control" name="Nama_Lengkap" value="{{ $item->Nama_Lengkap }}"  />
                      </div>
                    </div>
                    <div class="col-12 col-md-6">
                      <div class="product-title">Tanggal Lahir</div>
                      <div class="product-subtitle">
                         <input type="date" class="form-control" name="Tanggal_Lahir" value="{{ $item->Tanggal_Lahir }}" required />
                      </div>
                    </div>
                    <div class="col-12 col-md-6">
                      <div class="product-title">Tempat Lahir</div>
                      <div class="product-subtitle">
                         <input type="text" class="form-control" name="Tempat_Lahir" value="{{ $item->Tempat_Lahir }}" required />
                      </div>
                    </div>
                    <div class="col-12 col-md-6">
                      <div class="product-title">Jenis Kelamin</div>
                      <div class="product-subtitle">
                         <input type="text" class="form-control" name="Jenis_Kelamin" value="{{ $item->Jenis_Kelamin }}" required />
                      </div>
                    </div>
                    <div class="col-12 col-md-6">
                      <div class="product-title">Status Perkawinan</div>
                      <div class="product-subtitle">
                         <input type="text"class="form-control" name="Status_Perkawinan" value="{{ $item->Status_Perkawinan }}" required />
                      </div>
                    </div>
                    <div class="col-12 col-md-6">
                      <div class="product-title">Tinggi Badan</div>
                      <div class="product-subtitle">
                         <input type="number" class="form-control" name="Tinggi_Badan" value="{{ $item->Tinggi_Badan }}" required />
                      </div>
                    </div>
                    <div class="col-12 col-md-6">
                      <div class="product-title">Berat Badan</div>
                      <div class="product-subtitle">
                         <input type="number" class="form-control" name="Berat_Badan" value="{{ $item->Berat_Badan }}" required />
                      </div>
                    </div>
                    {{-- <div class="col-12 col-md-6">
                      <div class="product-title">Username</div>
                      <div class="product-subtitle">
                         <input type="text" class="form-control" name="Username" value="" required />
                      </div>
                    </div> --}}
                 </div>
                </div>
              </div>
                <div class="row">
                  <div class="col-12 mt-4">
                    {{-- <h5>Shipping Information</h5> --}}
                  </div>
                  <div class="col-12">
                    <div class="row">
                      <div class="col-12 col-md-6">
                        <div class="product-title">No KTP</div>
                        <div class="product-subtitle">
                          <input type="number" class="form-control" name="No_KTP" value="{{ $item->No_KTP }}" required />
                        </div>
                      </div>
                      <div class="col-12 col-md-6">
                        <div class="product-title">Alamat KTP</div>
                        <div class="product-subtitle">
                          <input type="text" class="form-control" name="Alamat_KTP" value="{{ $item->Alamat_KTP }}" required />
                        </div>
                      </div>
                      <div class="col-12 col-md-6">
                        <div class="product-title">Keadaan Saat Isi</div>
                        <div class="product-subtitle">
                         <input type="text" class="form-control" name="Keadaan_Saat_Isi" value="{{ $item->Keadaan_Saat_Isi }}" required />              
                        </div>
                      </div>
                      <div class="col-12 col-md-6">
                        <div class="product-title">Cek Kesehatan Terakhir</div>
                        <div class="product-subtitle">
                           <input type="text" class="form-control" name="Cek_Kes_Terakhir" value="{{ $item->Cek_Kes_Terakhir }}" required />                 
                        </div>
                      </div>
                      <div class="col-12 col-md-6">
                        <div class="product-title">Nama Keluarga Dekat</div>
                        <div class="product-subtitle">
                          <input type="text" class="form-control" name="Nama_Kel_Dekat" value="{{ $item->Nama_Kel_Dekat }}" required />
                        </div>
                      </div>
                      <div class="col-12 col-md-6">
                        <div class="product-title">No Hp Keluarga Dekat</div>
                        <div class="product-subtitle">
                           <input type="number" class="form-control" name="No_Hp_Kel_Dekat" value="{{ $item->No_Hp_Kel_Dekat }}" required />
                      </div>
                    </div>
                      <div class="col-12 col-md-6">
                        <div class="product-title">No Hp Pribadi</div>
                        <div class="product-subtitle">
                           <input type="number" class="form-control" name="No_Hp" value="{{ $item->No_Hp }}" required />
                      </div>
                    </div>
                    </div>
                  </div>
                </div>
                <div class="row mt-4">
                  <div class="col-12 text-right">
                  <div class="col text-right">
                    <button
                      type="submit"
                      class="btn btn-primary px-5"
                    >
                      Save Now
                    </button>
                  </div>
              </div>
            </div>

          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection