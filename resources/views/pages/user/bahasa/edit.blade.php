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
        <h2 class="dashboard-title">Data Bahasa</h2>
        <p class="dashboard-subtitle">
            Edit "{{ $item->Bahasa }}" Data Bahasa
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
          <form action="{{ route('bahasa.update', $item->id) }}" method="post" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Bahasa</label>
                      <input type="text" class="form-control" name="Bahasa" value="{{ $item->Bahasa }}"  />
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Lisan</label>
                      <input type="text" class="form-control" name="Lisan" value="{{ $item->Lisan }}"  />
                       <small>Kosongkan jika tidak ingin mengganti password</small>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Tulisan</label>
                      <input type="text" class="form-control" name="Tulisan" value="{{ $item->Tulisan }}" />
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