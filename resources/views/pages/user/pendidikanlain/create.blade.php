@extends('layouts.dashboardv1')

@section('title')
    Data Pendidikan Non Formal
@endsection

@section('content')
<!-- Section Content -->
  <div class="container-fluid">
    <div class="dashboard-heading">
        <h2 class="dashboard-title">Data Pendidikan Non Formal</h2>
        <p class="dashboard-subtitle">
            Create New Data Pendidikan Non Formal
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
          <form action="{{ route('pendidikannonformal.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Nama Lembaga</label>
                      <input type="text" class="form-control" name="Nama_Lembaga" required />
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Tahun</label>
                      <input type="date" class="form-control" name="Tahun" required />
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Jurusan</label>
                      <input type="text" class="form-control" name="Jurusan"required />
                    </div>
                  </div>
                 <div class="col-md-12">
                    <div class="form-group">
                      <label>Tingkat</label>
                      <input type="number" class="form-control" name="Tingkat"required />
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
