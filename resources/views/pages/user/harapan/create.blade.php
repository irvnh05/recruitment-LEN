@extends('layouts.dashboardv1')

@section('title')
    Data Harapan
@endsection

@section('content')
<!-- Section Content -->
  <div class="container-fluid">
    <div class="dashboard-heading">
        <h2 class="dashboard-title">Data Harapan</h2>
        <p class="dashboard-subtitle">
            Create New Data Harapan
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
          <form action="{{ route('harapan.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Harapan Karir</label>
                      <input type="text" class="form-control" name="Harapan_Karir" required />
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Permintaan Gaji</label>
                      <input type="text" class="form-control" name="Permintaan_Gaji" required />
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Minat Posisi Jika Ditolak</label>
                      <input type="text" class="form-control" name="Minat_Posisi_Jika_Ditolak"required />
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
