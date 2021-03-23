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
      <h2 class="dashboard-title "> CV</h2>
      <p class="dashboard-subtitle">
        {{-- Make store that profitable --}}
      </p>
    </div>
    <div class="dashboard-content">
      <div class="row">
        <div class="col-12"> 
            <div class="card">
            <!-- <button type="button" class="btn btn-primary float-left mb-0" data-toggle="modal" data-target="#modalpengalamankerja">+ Tambah Bulan Baru</button> -->
        <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
      Pilih Data 
    </button>
    <div class="dropdown-menu">
      <!-- <div class="dropdown-header">Contoh header Dropdown</div> -->
      <!-- <a class="dropdown-item" href="#">Link 1</a>
      <a class="dropdown-item" href="#">Link 2</a>
      <div class="dropdown-divider"></div> -->
      <a class="dropdown-item float-left mb-0" data-toggle="modal" data-target="#modalpengalamankerja">Pengalaman Kerja</a>
      <a class="dropdown-item float-left mb-0" data-toggle="modal" data-target="#modalpendidikan">Pendidikan</a>
      <a class="dropdown-item float-left mb-0" data-toggle="modal" data-target="#modalkeluarga">Keluarga</a>
      <a class="dropdown-item float-left mb-0" data-toggle="modal" data-target="#modalpenunjang">Penunjang</a>
      <a class="dropdown-item float-left mb-0" data-toggle="modal" data-target="#modalberkas">Berkas Lampiran</a>

  </div>

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
                  <a href="{{ url()->previous() }}" class="btn btn-warning"><i class="fa fa-angle-left"></i>Kembali</a>

                  </div>
              </div>
            </div>
            </tr>
        </div>
      </div>
    </div>
  </div>
</div>

  <!-- modal pengalaman kerja -->
  <div class="modal fade" id="modalpengalamankerja" tabindex="-1" role="dialog" aria-labelledby="modalpengalamankerjaLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title">Pengalaman Kerja</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="modalpengalamankerja">
                    <div class="col-12 row">
                    @foreach ($kerja as $kerja1)
                <div class="col-12 col-md-6">
                        <div class="product-title">Nama Perusahaan</div>
                        <div class="product-subtitle">
                          <input type="text" class="form-control" name="Nama_Perusahaan" value="{{ $kerja1->Nama_Perusahaan }}" required disabled/>
                        </div>
                      </div>
                      <div class="col-12 col-md-6">
                        <div class="product-title">Tahun</div>
                        <div class="product-subtitle">
                         <input type="text" class="form-control" name="Tahun" value="{{ $kerja1->Tahun }}" required disabled/>              
                        </div>
                      </div>
                      <div class="col-12 col-md-6">
                        <div class="product-title">Tugas TJU</div>
                        <div class="product-subtitle">
                           <input type="text" class="form-control" name="Tugas_TJU" value="{{ $kerja1->Tugas_TJU }}" required disabled/>                 
                        </div>
                      </div>
                      <div class="col-12 col-md-6">
                        <div class="product-title">Gaji</div>
                        <div class="product-subtitle">
                          <input type="text" class="form-control" name="Gaji" value="{{ $kerja1->Gaji }}" required disabled/>
                        </div>
                      </div>
                      <div class="col-12 col-md-6">
                        <div class="product-title">Alasan Berhenti</div>
                        <div class="product-subtitle">
                           <input type="number" class="form-control" name="Alasan_Berhenti" value="{{ $kerja1->Alasan_Berhenti }}" required disabled/>
                      </div>
                    </div>
                    <span aria-hidden="true">&times;</span>
                    @endforeach
 
<div class="form-group">

</div>
<a class=" btn btn-warning" data-dismiss="modal" aria-label="Close"></i>Kembali</a>
<!-- <a href="close" class="btn btn-warning"><i class="fa fa-angle-left"></i>Kembali</a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- modal pendidikan -->
    <div class="modal fade" id="modalpendidikan" tabindex="-1" role="dialog" aria-labelledby="modalpendidikanLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title">Pendidikan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="modalpendidikan">
                <div class="col-12 row">
                <h5 class="modal-title">Pendidikan Formal</h5>
                @foreach ($formal as $formal1)
                
                <div class="col-12 col-md-6">
                        <div class="product-title">Nama Lembaga</div>
                        <div class="product-subtitle">
                          <input type="text" class="form-control" name="Nama_Lembaga" value="{{ $formal1->Nama_Lembaga }}" required disabled/>
                        </div>
                      </div>
                      <div class="col-12 col-md-6">
                        <div class="product-title">Tahun</div>
                        <div class="product-subtitle">
                         <input type="text" class="form-control" name="Tahun" value="{{ $formal1->Tahun }}" required disabled/>              
                        </div>
                      </div>
                      <div class="col-12 col-md-6">
                        <div class="product-title">Jurusan</div>
                        <div class="product-subtitle">
                           <input type="text" class="form-control" name="Jurusan" value="{{ $formal1->Jurusan }}" required disabled/>                 
                        </div>
                      </div>
                      <div class="col-12 col-md-6">
                        <div class="product-title">Tingkat</div>
                        <div class="product-subtitle">
                          <input type="text" class="form-control" name="Tingkat" value="{{ $formal1->Tingkat }}" required disabled/>
                        </div>
                      </div>
                    <span aria-hidden="true">&times;</span>
                    @endforeach
                    <span aria-hidden="true">&times;</span>
                    <h5 class="modal-title">Pendidikan Non Formal</h5>
                    @foreach ($non as $non1)
                      <div class="col-12 col-md-6">
                        <div class="product-title">Nama Lembaga</div>
                        <div class="product-subtitle">
                          <input type="text" class="form-control" name="Nama_Lembaga" value="{{ $non1->Nama_Lembaga }}" required disabled/>
                        </div>
                      </div>
                      <div class="col-12 col-md-6">
                        <div class="product-title">Tahun</div>
                        <div class="product-subtitle">
                         <input type="text" class="form-control" name="Tahun" value="{{ $non1->Tahun }}" required disabled/>              
                        </div>
                      </div>
                      <div class="col-12 col-md-6">
                        <div class="product-title">Jurusan</div>
                        <div class="product-subtitle">
                           <input type="text" class="form-control" name="Jurusan" value="{{ $non1->Jurusan }}" required disabled/>                 
                        </div>
                      </div>
                      <div class="col-12 col-md-6">
                        <div class="product-title">Tingkat</div>
                        <div class="product-subtitle">
                          <input type="text" class="form-control" name="Tingkat" value="{{ $non1->Tingkat }}" required disabled/>
                        </div>
                      </div>
                    <span aria-hidden="true">&times;</span>
                    @endforeach          
                    <span aria-hidden="true">&times;</span>
                    <h5 class="modal-title">Kemampuan Bahasa</h5>
                    @foreach ($bahasa as $bahasa1)
                      <div class="col-12 col-md-6">
                        <div class="product-title">Bahasa</div>
                        <div class="product-subtitle">
                          <input type="text" class="form-control" name="Bahasa" value="{{ $bahasa1->Bahasa }}" required disabled/>
                        </div>
                      </div>
                      <div class="col-12 col-md-6">
                        <div class="product-title">Lisan</div>
                        <div class="product-subtitle">
                         <input type="text" class="form-control" name="Lisan" value="{{ $bahasa1->Lisan }}" required disabled/>              
                        </div>
                      </div>
                      <div class="col-12 col-md-6">
                        <div class="product-title">Tulisan</div>
                        <div class="product-subtitle">
                           <input type="text" class="form-control" name="Tulisan" value="{{ $bahasa1->Tulisan }}" required disabled/>                 
                        </div>
                      </div>
                    <span aria-hidden="true">&times;</span>
                    @endforeach        
                    <span aria-hidden="true">&times;</span>
                    <h5 class="modal-title">Riwayat Beasiswa</h5>
                    @foreach ($beasiswa as $beasiswa1)
                      <div class="col-12 col-md-6">
                        <div class="product-title">Nama Lembaga</div>
                        <div class="product-subtitle">
                          <input type="text" class="form-control" name="Lembaga" value="{{ $beasiswa1->Lembaga }}" required disabled/>
                        </div>
                      </div>
                      <div class="col-12 col-md-6">
                        <div class="product-title">Tempat</div>
                        <div class="product-subtitle">
                         <input type="text" class="form-control" name="Tempat" value="{{ $beasiswa1->Tempat }}" required disabled/>              
                        </div>
                      </div>
                    <span aria-hidden="true">&times;</span>
                    @endforeach                       
                        <div class="form-group">

</div>
<a class=" btn btn-warning" data-dismiss="modal" aria-label="Close"></i>Kembali</a>
<!-- <a href="close" class="btn btn-warning"><i class="fa fa-angle-left"></i>Kembali</a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- modal keluarga -->
    <div class="modal fade" id="modalkeluarga" tabindex="-1" role="dialog" aria-labelledby="modalkeluargaLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title">Keluarga</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="modalkeluarga">
                <div class="col-12 row">
                @foreach ($keluarga as $keluarga1)
                <div class="col-12 col-md-6">
                        <div class="product-title">Nama Lengkap</div>
                        <div class="product-subtitle">
                          <input type="text" class="form-control" name="Nama_Lengkap" value="{{ $keluarga1->Nama_Lengkap }}" required disabled/>
                        </div>
                      </div>
                      <div class="col-12 col-md-6">
                        <div class="product-title">Tempat Tanggal Lahir</div>
                        <div class="product-subtitle">
                         <input type="text" class="form-control" name="TTL" value="{{ $keluarga1->TTL }}" required disabled/>              
                        </div>
                      </div>
                      <div class="col-12 col-md-6">
                        <div class="product-title">Hubungan</div>
                        <div class="product-subtitle">
                           <input type="text" class="form-control" name="Hubungan" value="{{ $keluarga1->Hubungan }}" required disabled/>                 
                        </div>
                      </div>
                      <div class="col-12 col-md-6">
                        <div class="product-title">Pekerjaan/Sekolah</div>
                        <div class="product-subtitle">
                          <input type="text" class="form-control" name="PekerjaanSekolah" value="{{ $keluarga1->PekerjaanSekolah }}" required disabled/>
                        </div>
                      </div>
                    <span aria-hidden="true">&times;</span>
                    @endforeach
 
                        <div class="form-group">

</div>
<a class=" btn btn-warning" data-dismiss="modal" aria-label="Close"></i>Kembali</a>
<!-- <a href="close" class="btn btn-warning"><i class="fa fa-angle-left"></i>Kembali</a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- modal penunjang -->
<div class="modal fade" id="modalpenunjang" tabindex="-1" role="dialog" aria-labelledby="modalpenunjangLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title">Penunjang</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="modalpenunjang">
                <div class="col-12 row">     
                    <span aria-hidden="true">&times;</span>
                    <h5 class="modal-title">Pengalaman Organisasi</h5>
                    @foreach ($organisasi as $organisasi1)
                      <div class="col-12 col-md-6">
                        <div class="product-title">Nama Organisasi</div>
                        <div class="product-subtitle">
                          <input type="text" class="form-control" name="Nama_Organisasi" value="{{ $organisasi1->Nama_Organisasi }}" required disabled/>
                        </div>
                      </div>
                      <div class="col-12 col-md-6">
                        <div class="product-title">Jabatan</div>
                        <div class="product-subtitle">
                         <input type="text" class="form-control" name="Jabatan" value="{{ $organisasi1->Jabatan }}" required disabled/>              
                        </div>
                      </div>
                    <span aria-hidden="true">&times;</span>
                    @endforeach          
                    <span aria-hidden="true">&times;</span>
                    <h5 class="modal-title">Harapan</h5>
                    @foreach ($harapan as $harapan1)
                      <div class="col-12 col-md-6">
                        <div class="product-title"> Harapan Karir</div>
                        <div class="product-subtitle">
                          <input type="text" class="form-control" name="Harapan_Karir" value="{{ $harapan1->Harapan_Karir }}" required disabled/>
                        </div>
                      </div>
                      <div class="col-12 col-md-6">
                        <div class="product-title">Permintaan Gaji</div>
                        <div class="product-subtitle">
                         <input type="text" class="form-control" name="Permintaan_Gaji" value="{{ $harapan1->Permintaan_Gaji }}" required disabled/>              
                        </div>
                      </div>
                      <div class="col-12 col-md-6">
                        <div class="product-title">Minat Posisi Lain Jika Ditolak</div>
                        <div class="product-subtitle">
                         <input type="text" class="form-control" name="Minat_Posisi_Jika_Ditolak" value="{{ $harapan1->Minat_Posisi_Jika_Ditolak }}" required disabled/>              
                        </div>
                      </div>
                    <span aria-hidden="true">&times;</span>
                    @endforeach    
                    <span aria-hidden="true">&times;</span>
                    <h5 class="modal-title">Saudara / Kerabat Di LEN</h5>
                    @foreach ($sdrkwnlen as $sdrkwnlen1)
                      <div class="col-12 col-md-6">
                        <div class="product-title"> Nama Lengkap</div>
                        <div class="product-subtitle">
                          <input type="text" class="form-control" name="Nama_Lengkap" value="{{ $sdrkwnlen1->Nama_Lengkap }}" required disabled/>
                        </div>
                      </div>
                      <div class="col-12 col-md-6">
                        <div class="product-title">Hubungan</div>
                        <div class="product-subtitle">
                         <input type="text" class="form-control" name="Hubungan" value="{{ $sdrkwnlen1->Hubungan }}" required disabled/>              
                        </div>
                      </div>
                      <div class="col-12 col-md-6">
                        <div class="product-title">Bagian</div>
                        <div class="product-subtitle">
                         <input type="text" class="form-control" name="Bagian" value="{{ $organisasi1->Bagian }}" required disabled/>              
                        </div>
                      </div>
                    <span aria-hidden="true">&times;</span>
                    @endforeach        
                    <span aria-hidden="true">&times;</span>
                    <h5 class="modal-title">Proses Seleksi Di Tempat Lain</h5>
                    @foreach ($seleksiperusahaanlain as $seleksiperusahaanlain1)
                      <div class="col-12 col-md-6">
                        <div class="product-title"> Nama Perusahaan</div>
                        <div class="product-subtitle">
                          <input type="text" class="form-control" name="Perusahaan" value="{{ $seleksiperusahaanlain1->Perusahaan }}" required disabled/>
                        </div>
                      </div>
                      <div class="col-12 col-md-6">
                        <div class="product-title">Posisi</div>
                        <div class="product-subtitle">
                         <input type="text" class="form-control" name="Posisi" value="{{ $seleksiperusahaanlain1->Posisi }}" required disabled/>              
                        </div>
                      </div>
                    <span aria-hidden="true">&times;</span>
                    @endforeach 
                    <span aria-hidden="true">&times;</span>
                    <h5 class="modal-title">Info lain</h5>
                    @foreach ($infolain as $infolain1)
                      <div class="col-12 col-md-6">
                        <div class="product-title">Melamar Melalui</div>
                        <div class="product-subtitle">
                          <input type="text" class="form-control" name="Melamar_Melalui" value="{{ $infolain1->Melamar_Melalui }}" required disabled/>
                        </div>
                      </div>
                      <div class="col-12 col-md-6">
                        <div class="product-title">Diperkenalkan Oleh</div>
                        <div class="product-subtitle">
                         <input type="text" class="form-control" name="Diperkenalkan_Oleh" value="{{ $infolain1->Diperkenalkan_Oleh }}" required disabled/>              
                        </div>
                      </div>
                      <div class="col-12 col-md-6">
                        <div class="product-title">Kegiatan Lain</div>
                        <div class="product-subtitle">
                         <input type="text" class="form-control" name="Kegiatan_Lain" value="{{ $infolain1->Kegiatan_Lain }}" required disabled/>              
                        </div>
                      </div>
                      <div class="col-12 col-md-6">
                        <div class="product-title">Hobi</div>
                        <div class="product-subtitle">
                         <input type="text" class="form-control" name="Hobi" value="{{ $infolain1->Hobi }}" required disabled/>              
                        </div>
                      </div>
                                            
                    <span aria-hidden="true">&times;</span>
                    @endforeach                                 
                        <div class="form-group">

</div>
<a class=" btn btn-warning" data-dismiss="modal" aria-label="Close"></i>Kembali</a>
<!-- <a href="close" class="btn btn-warning"><i class="fa fa-angle-left"></i>Kembali</a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- modal berkas -->
    <div class="modal fade" id="modalberkas" tabindex="-1" role="dialog" aria-labelledby="modalberkasLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title">Berkas</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="modalberkas">
                <div class="col-12 row">
                @foreach ($berkas as $berkas1)
                <div class="col-12 col-md-6">
                        <div class="product-title">Nama Lampiran</div>
                        <div class="product-subtitle">
                          <input type="text" class="form-control" name="Nama_Lampiran	" value="{{ $berkas1->Nama_Lampiran	 }}" required disabled/>
                        </div>
                      </div>
                      <div class="col-12 col-md-6">
                        <div class="product-title">Lampiran</div>
                        <div class="product-subtitle">
                        <a ="{{ route('download',$name->file) }}"> Download  </a>
                         <!-- <input type="text" class="form-control" name="Lampiran" value="{{ $berkas1->Lampiran }}" required disabled/>               -->
                        </div>
                      </div>
                      <div class="col-12 col-md-6">
                        <div class="product-title">Nama Institusi</div>
                        <div class="product-subtitle">
                           <input type="text" class="form-control" name="Nama_Institusi" value="{{ $berkas1->Nama_Institusi }}" required disabled/>                 
                        </div>
                      </div>
                    <span aria-hidden="true">&times;</span>
                    @endforeach
 
                        <div class="form-group">

</div>
<a class=" btn btn-warning" data-dismiss="modal" aria-label="Close"></i>Kembali</a>
<!-- <a href="close" class="btn btn-warning"><i class="fa fa-angle-left"></i>Kembali</a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
@push('addon-script')
<script>

              // display a modal (modal kerja)
              $(document).on('click', '#modalpengalamankerja', function(event) {
            event.preventDefault();
            let href = $(this).attr('data-attr');
            $.ajax({
                url: href,
                beforeSend: function() {
                    $('#loader').show();
                },
                // return the result
                success: function(result) {
                    $('#modalpengalamankerja').modal("show");
                    $('#modalpengalamankerja').html(result).show();
                },
                complete: function() {
                    $('#loader').hide();
                },
                error: function(jqXHR, testStatus, error) {
                    console.log(error);
                    alert("Page " + href + " cannot open. Error:" + error);
                    $('#loader').hide();
                },
                // timeout: 8000
            })
        });

        // display a modal (modal pendidikan)
        $(document).on('click', '#modalpendidikan', function(event) {
            event.preventDefault();
            let href = $(this).attr('data-attr');
            $.ajax({
                url: href,
                beforeSend: function() {
                    $('#loader').show();
                },
                // return the result
                success: function(result) {
                    $('#modalpendidikan').modal("show");
                    $('#modalpendidikan').html(result).show();
                },
                complete: function() {
                    $('#loader').hide();
                },
                error: function(jqXHR, testStatus, error) {
                    console.log(error);
                    alert("Page " + href + " cannot open. Error:" + error);
                    $('#loader').hide();
                },
                // timeout: 8000
            })
        });

         // display a modal (modal keluarga)
         $(document).on('click', '#modalkeluarga', function(event) {
            event.preventDefault();
            let href = $(this).attr('data-attr');
            $.ajax({
                url: href,
                beforeSend: function() {
                    $('#loader').show();
                },
                // return the result
                success: function(result) {
                    $('#modalkeluarga').modal("show");
                    $('#modalkeluarga').html(result).show();
                },
                complete: function() {
                    $('#loader').hide();
                },
                error: function(jqXHR, testStatus, error) {
                    console.log(error);
                    alert("Page " + href + " cannot open. Error:" + error);
                    $('#loader').hide();
                },
                // timeout: 8000
            })
        });

         // display a modal (modal penunjang)
         $(document).on('click', '#modalpenunjang', function(event) {
            event.preventDefault();
            let href = $(this).attr('data-attr');
            $.ajax({
                url: href,
                beforeSend: function() {
                    $('#loader').show();
                },
                // return the result
                success: function(result) {
                    $('#modalpenunjang').modal("show");
                    $('#modalpenunjang').html(result).show();
                },
                complete: function() {
                    $('#loader').hide();
                },
                error: function(jqXHR, testStatus, error) {
                    console.log(error);
                    alert("Page " + href + " cannot open. Error:" + error);
                    $('#loader').hide();
                },
                // timeout: 8000
            })
        });

         // display a modal (modal berkas)
         $(document).on('click', '#modalberkas', function(event) {
            event.preventDefault();
            let href = $(this).attr('data-attr');
            $.ajax({
                url: href,
                beforeSend: function() {
                    $('#loader').show();
                },
                // return the result
                success: function(result) {
                    $('#modalberkas').modal("show");
                    $('#modalberkas').html(result).show();
                },
                complete: function() {
                    $('#loader').hide();
                },
                error: function(jqXHR, testStatus, error) {
                    console.log(error);
                    alert("Page " + href + " cannot open. Error:" + error);
                    $('#loader').hide();
                },
                // timeout: 8000
            })
        });

    </script>
@endpush