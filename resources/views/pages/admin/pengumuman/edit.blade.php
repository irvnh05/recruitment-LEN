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
        <h2 class="dashboard-title">User</h2>
        <p class="dashboard-subtitle">
            Edit "{{ $item->name }}" User
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
          <form action="{{ route('pengumuman.update', $item->id) }}" method="post" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Judul</label>
                      <input type="text" class="form-control" name="judul" value="{{ $item->judul }}" required />
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <!-- <label>Foto</label>
                      <div class="round">
                  @if(old('photos',$item->photos) == 'assets/datadiri/user.png')  
                   <img
                    src="{{ Storage::url($item->photos ?? '') }}" 
                    class=""
                    alt="" 
                  /> 
                  <h4>Upload Foto</h4>
                  <input type="file" class="form-control"  placeholder="Upload photos" name="photos"/>
                  @else

                  <label>
                  <img
                    src="{{ Storage::url($item->photos ?? '') }}" 
                    class=""
                    alt="" 
                  /> 
                  <input type="file" class="form-control"  placeholder="Upload Foto" name="photos"/>
                  </label>
                  @endif         -->
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Deksripsi</label>
                      <input type="text" class="form-control" name="deksripsi" value="{{ $item->deksripsi }}" required />
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Kategori</label>
                      <select name="kategori" required class="form-control" value="{{ $item->kategori }}" required >
                          <option value="aktiv">Aktiv</option>
                          <option value="non">Non</option>
                        </select>
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