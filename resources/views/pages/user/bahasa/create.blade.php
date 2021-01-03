@extends('layouts.dashboardv1')

@section('title')
    Data Bahasa
@endsection

@section('content')
<!-- Section Content -->
  <div class="container-fluid">
    <div class="dashboard-heading">
        <h2 class="dashboard-title">Data Bahasa</h2>
        <p class="dashboard-subtitle">
            Create New Data Bahasa
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
          <form action="{{ route('bahasa.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Bahasa</label>
                      <input type="text" class="form-control" name="Bahasa" required />
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Lisan</label>
                      <input type="text" class="form-control" name="Lisan" required />
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Tulisan</label>
                      <input type="text" class="form-control" name="Tulisan"required />
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
