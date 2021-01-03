@extends('layouts.admin')

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
        <h2 class="dashboard-title">Lowongan</h2>
        <p class="dashboard-subtitle">
            Edit "{{ $item->posisi }}" Lowongan
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
          <form action="{{ route('lowongan.update', $item->id) }}" method="post" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Posisi</label>
                      <input type="text" class="form-control" name="posisi" value="{{ $item->posisi }}" required />
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Gaji</label>
                      <input type="text" class="form-control" name="gaji" value="{{ $item->gaji }}" required />
                       <small>Kosongkan jika tidak ingin mengganti</small>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Deksripsi</label>
                         <textarea name="deksripsi" id="editor" value="{{ $item->deksripsi }}"></textarea>
                      <small>Kosongkan jika tidak ingin mengganti </small>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Kriteria Penting</label>
                      <input type="text" class="form-control" name="kriteria_penting" value="{{ $item->kriteria_penting }}"  />
                      <small>Kosongkan jika tidak ingin mengganti </small>
                    </div>
                  </div>
                 <div class="col-md-12">
                    <div class="form-group">
                      <label>Tgl Awal</label>
                      <input type="date" class="form-control" name="tgl_awal" value="{{ $item->tgl_awal }}" />
                      <small>Kosongkan jika tidak ingin mengganti </small>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Tgl Akhir</label>
                      <input type="date" class="form-control" name="tgl_akhir" value="{{ $item->tgl_akhir }}"  />
                      <small>Kosongkan jika tidak ingin mengganti </small>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Program</label>
                      <select name="programs_id" required class="form-control">
                        @foreach ($programs as $programs)
                          <option value="{{ $programs->id }}">{{ $programs->name }}</option>
                        @endforeach
                        </select>
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

@push('addon-script')
  <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
  <script>
    CKEDITOR.replace('editor');
  </script>
@endpush