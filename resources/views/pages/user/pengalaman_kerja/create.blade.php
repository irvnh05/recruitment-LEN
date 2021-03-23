@extends('layouts.dashboardv1')

@section('title')
    Data Pengalaman Kerja
@endsection

@section('content')
<!-- Section Content -->
  <div class="container-fluid">
    <div class="dashboard-heading">
        <h2 class="dashboard-title">Data Pengalaman Kerja</h2>
        <p class="dashboard-subtitle">
            Create New Data Pengalaman Kerja
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
          <form action="{{ route('pengalamankerja.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Nama Perusahaan</label>
                      <input type="text" class="form-control" name="Nama_Perusahaan" required />
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Tahun</label>
                      <input type="text" class="form-control" name="Tahun" required />
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Tugas TJU</label>
                      <input type="text" class="form-control" name="Tugas_TJU"required />
                    </div>
                  </div>
                 <div class="col-md-12">
                    <div class="form-group">
                      <label>Gaji</label>
                      <input type="number" class="form-control" name="Gaji"required />
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Alasan Berhenti</label>
                      <input type="text" class="form-control" name="Alasan_Berhenti"required />
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col text-right">
                  <a href="{{ url()->previous() }}" class="btn btn-warning"><i class="fa fa-angle-left"></i>Kembali</a>
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
