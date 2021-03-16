@extends('layouts.admin')

@section('title')
     Dashboard
@endsection

@section('content')
<div
  class="section-content section-dashboard-home"
  data-aos="fade-up"
>
  <div class="container-fluid">
    <div class="dashboard-heading">
      <h2 class="dashboard-title"> Data Pribadi</h2>
      <p class="dashboard-subtitle">
        {{-- Make store that profitable --}}
      </p>
    </div>
    <div class="dashboard-content">
      <div class="row">
        <div class="col-12">
 

   

        
            <div class="card">
              <div class="card-body">
                              @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="row">
                <div class="col-12 col-md-4 ">
                  <div class="round">
                  @if(old('foto',$item->biodata->foto) == 'assets/datadiri/user.png')  
                   <img
                    src="{{ Storage::url($item->biodata->foto ?? '') }}" 
                    class=""
                    alt="" 
                  /> 
                  <h4>Upload Foto</h4>
                  <input type="file" class="form-control"  placeholder="Upload Foto" name="foto"/>
                  @else

                  <label>
                  <img
                    src="{{ Storage::url($item->biodata->foto ?? '') }}" 
                    class=""
                    alt="" 
                  /> 
                  <input type="file" class="form-control"  placeholder="Upload Foto" name="foto"/>
                  </label>
                  @endif        
     
                </div>
                </div>
                <div class="col-12 col-md-8">
                  <div class="row">
                    <!-- <div class="col-12 col-md-6">
                      <div class="product-title">Foto</div>
                      <div class="product-subtitle">
                        <input type="file" class="form-control"  name="foto"/>
                      </div>
                    </div>-->
                    <div class="col-12 col-md-6"> 
                      <div class="product-title">Nama Lengkap</div>
                      <div class="product-subtitle">
                        <input class="form-control" name="Nama_Lengkap" value="{{ $item->biodata->Nama_Lengkap }}" disabled  />
                      </div>
                    </div>
                    <div class="col-12 col-md-6">
                      <div class="product-title">Tanggal Lahir</div>
                      <div class="product-subtitle">
                         <input type="date" class="form-control" name="Tanggal_Lahir" value="{{ $item->biodata->Tanggal_Lahir }}" required disabled/>
                      </div>
                    </div>
                    <div class="col-12 col-md-6">
                      <div class="product-title">Tempat Lahir</div>
                      <div class="product-subtitle">
                         <input type="text" class="form-control" name="Tempat_Lahir" value="{{ $item->biodata->Tempat_Lahir }}" required disabled/>
                      </div>
                    </div>
                    <div class="col-12 col-md-6">
                      <div class="product-title">Jenis Kelamin</div>
                      <div class="product-subtitle">
                         <!-- <input type="text" class="form-control" name="Jenis_Kelamin" value="{{ $item->biodata->Jenis_Kelamin }}" required disabled/> -->
                         <select name="Jenis_Kelamin" required class="form-control" value="{{ $item->biodata->Jenis_Kelamin }}" required disabled>
                         <option @if(old('Jenis_Kelamin',$item->biodata->Jenis_Kelamin) == 'Laki-Laki') selected @endif >
                         Laki-Laki
                       </option>
                       <option @if(old('Jenis_Kelamin',$item->biodata->Jenis_Kelamin) == 'Perempuan') selected @endif >
                           Perempuan
                       </option>
                          <!-- <option value="Laki-Laki">Laki-Laki</option>
                          <option value="Perempuan">Perempuan</option> -->
                        </select>
                      </div>
                    </div>
                    <div class="col-12 col-md-6">
                      <div class="product-title">Status Perkawinan</div>
                      <div class="product-subtitle">
                         <!-- <input type="text"class="form-control" name="Status_Perkawinan" value="{{ $item->biodata->Status_Perkawinan }}" required disabled/> -->
                          <select name="Status_Perkawinan" required class="form-control" value="{{ $item->biodata->Status_Perkawinan }}" required disabled/>
                          <option @if(old('Status_Perkawinan',$item->biodata->Status_Perkawinan) == 'Kawin') selected @endif >
                            Kawin
                          </option>
                          <option @if(old('Status_Perkawinan',$item->biodata->Status_Perkawinan) == 'Belum Kawin') selected @endif >
                            Belum Kawin
                          </option>
                          <option @if(old('Status_Perkawinan',$item->biodata->Status_Perkawinan) == 'Cerai Hidup') selected @endif >
                            Cerai Hidup
                          </option>
                          <option @if(old('Status_Perkawinan',$item->biodata->Status_Perkawinan) == 'Cerai Mati') selected @endif >
                            Cerai Mati
                          </option>
                        </select>
                      </div>
                    </div>
                    <div class="col-12 col-md-6">
                      <div class="product-title">Tinggi Badan (CM)</div>
                      <div class="product-subtitle">
                         <input type="number" class="form-control" name="Tinggi_Badan" value="{{ $item->biodata->Tinggi_Badan }}" required disabled/>
                      </div>
                    </div>
                    <div class="col-12 col-md-6">
                      <div class="product-title">Berat Badan (KG)</div>
                      <div class="product-subtitle">
                         <input type="number" class="form-control" name="Berat_Badan" value="{{ $item->biodata->Berat_Badan }}" required disabled/>
                      </div>
                    </div>
                    {{-- <div class="col-12 col-md-6">
                      <div class="product-title">Username</div>
                      <div class="product-subtitle">
                         <input type="text" class="form-control" name="Username" value="" required disabled/>
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
                          <input type="number" class="form-control" name="No_KTP" value="{{ $item->biodata->No_KTP }}" required disabled/>
                        </div>
                      </div>
                      <div class="col-12 col-md-6">
                        <div class="product-title">Alamat KTP</div>
                        <div class="product-subtitle">
                          <input type="text" class="form-control" name="Alamat_KTP" value="{{ $item->biodata->Alamat_KTP }}" required disabled/>
                        </div>
                      </div>
                      <div class="col-12 col-md-6">
                        <div class="product-title">Keadaan Saat Isi</div>
                        <div class="product-subtitle">
                         <input type="text" class="form-control" name="Keadaan_Saat_Isi" value="{{ $item->biodata->Keadaan_Saat_Isi }}" required disabled/>              
                        </div>
                      </div>
                      <div class="col-12 col-md-6">
                        <div class="product-title">Cek Kesehatan Terakhir</div>
                        <div class="product-subtitle">
                           <input type="text" class="form-control" name="Cek_Kes_Terakhir" value="{{ $item->biodata->Cek_Kes_Terakhir }}" required disabled/>                 
                        </div>
                      </div>
                      <div class="col-12 col-md-6">
                        <div class="product-title">Nama Keluarga Dekat</div>
                        <div class="product-subtitle">
                          <input type="text" class="form-control" name="Nama_Kel_Dekat" value="{{ $item->biodata->Nama_Kel_Dekat }}" required disabled/>
                        </div>
                      </div>
                      <div class="col-12 col-md-6">
                        <div class="product-title">No Hp Keluarga Dekat</div>
                        <div class="product-subtitle">
                           <input type="number" class="form-control" name="No_Hp_Kel_Dekat" value="{{ $item->biodata->No_Hp_Kel_Dekat }}" required disabled/>
                      </div>
                    </div>
                      <div class="col-12 col-md-6">
                        <div class="product-title">No Hp Pribadi</div>
                        <div class="product-subtitle">
                           <input type="number" class="form-control" name="No_Hp" value="{{ $item->biodata->No_Hp }}" required disabled/>
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
            </tr>
   


        </div>
      </div>
    </div>
  </div>
</div>
@endsection
@push('addon-script')
  
@endpush