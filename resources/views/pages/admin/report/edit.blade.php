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
        <h2 class="dashboard-title">Data Pengalaman Organisasi</h2>
        <p class="dashboard-subtitle">
            Edit "{{ $item->Jabatan }}" Data Pengalaman Organisasi
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
          <form action="{{ route('pengalamanorganisasi.update', $item->id) }}" method="post" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Jabatan</label>
                      <input type="text" class="form-control" name="Jabatan" value="{{ $item->Jabatan }}"  />
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Nama Organisasi</label>
                      <input type="text" class="form-control" name="Nama_Organisasi" value="{{ $item->Nama_Organisasi }}"  />
                       <small>Kosongkan jika tidak ingin mengganti password</small>
                    </div>
                  </div>
                </div>
                <div class="row">
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