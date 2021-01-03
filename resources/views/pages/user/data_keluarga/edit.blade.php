@extends('layouts.dashboardv1')

@section('title')
 Settings
@endsection

@section('content')
<!-- Section Content -->
<div
  class="section-content section-dashboard-home"
  data-aos="fade-up"
>
  <div class="container-fluid">
    <div class="dashboard-heading">
        <h2 class="dashboard-title">Data Keluarga</h2>
        <p class="dashboard-subtitle">
            Edit "{{ $item->Nama_Lengkap }}" Data Keluarga
        </p>
    </div>
    <div class="dashboard-content">
      <div class="row">
        <div class="col-12">
          @if ($errors->any())
              <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
          @endif
          <form action="{{ route('datakeluarga.update', $item->id) }}" method="post" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Nama Lengkap</label>
                      <input type="text" class="form-control" name="Nama_Lengkap" value="{{ $item->Nama_Lengkap }}"  />
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Tempat,Tanggal Lahir</label>
                      <input type="text" class="form-control" name="TTL" value="{{ $item->TTL }}"  />
                       <small>Kosongkan jika tidak ingin mengganti password</small>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Hubungan</label>
                      <input type="text" class="form-control" name="Hubungan" value="{{ $item->Hubungan }}" />
                      <small>Kosongkan jika tidak ingin mengganti password</small>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Pekerjaan/Sekolah</label>
                      <input type="text" class="form-control" name="PekerjaanSekolah" value="{{ $item->PekerjaanSekolah }}" />
                      <small>Kosongkan jika tidak ingin mengganti password</small>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col text-right">
                    <button
                      type="submit"
                      class="btn btn-success px-5"
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