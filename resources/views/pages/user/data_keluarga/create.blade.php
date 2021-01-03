@extends('layouts.dashboardv1')

@section('title')
    Data Keluarga
@endsection

@section('content')
<!-- Section Content -->
  <div class="container-fluid">
    <div class="dashboard-heading">
        <h2 class="dashboard-title">Data Keluarga</h2>
        <p class="dashboard-subtitle">
            Create New Data Keluarga
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
          <form action="{{ route('datakeluarga.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Nama Lengkap</label>
                      <input type="text" class="form-control" name="Nama_Lengkap" required />
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Tempat,Tangal lahir</label>
                      <input type="text" class="form-control" name="TTL" required />
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Hubungan</label>
                      <input type="text" class="form-control" name="Hubungan"required />
                    </div>
                  </div>
                 <div class="col-md-12">
                    <div class="form-group">
                      <label>Pekerjaan/Sekolah</label>
                      <input type="text" class="form-control" name="PekerjaanSekolah"required />
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
