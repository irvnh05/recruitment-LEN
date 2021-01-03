@extends('layouts.dashboardv1')

@section('title')
    Data Lampiran
@endsection

@section('content')
<!-- Section Content -->
  <div class="container-fluid">
    <div class="dashboard-heading">
        <h2 class="dashboard-title">Data Lampiran</h2>
        <p class="dashboard-subtitle">
            Create New Data Lampiran
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
          <form action="{{ route('lampiran.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Nama Lampiran</label>
                      <input type="text" class="form-control" name="Nama_Lampiran" required />
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Lampiran</label>
                      <input type="file" class="form-control" name="Lampiran" required />
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Nama Instansi</label>
                      <input type="text" class="form-control" name="Nama_Institusi"required />
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
