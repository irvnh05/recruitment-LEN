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
        <h2 class="dashboard-title">Data Pengalaman Kerja</h2>
        <p class="dashboard-subtitle">
            Edit "{{ $item->Nama_Perusahaan }}" Data Pengalaman Kerja
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
          <form action="{{ route('pengalamankerja.update', $item->id) }}" method="post" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Nama Perusahaan</label>
                      <input type="text" class="form-control" name="Nama_Perusahaan" value="{{ $item->Nama_Perusahaan }}"  />
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Tahun</label>
                      <input type="date" class="form-control" name="Tahun" value="{{ $item->Tahun }}"  />
                       <small>Kosongkan jika tidak ingin mengganti password</small>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Tugas TJU</label>
                      <input type="text" class="form-control" name="Tugas_TJU" value="{{ $item->Tugas_TJU }}" />
                      <small>Kosongkan jika tidak ingin mengganti password</small>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Gaji</label>
                      <input type="number" class="form-control" name="Gaji" value="{{ $item->Gaji }}" />
                      <small>Kosongkan jika tidak ingin mengganti password</small>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Alasan Berhenti</label>
                      <input type="text" class="form-control" name="Alasan_Berhenti" value="{{ $item->Alasan_Berhenti }}" />
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