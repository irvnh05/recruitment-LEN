@extends('layouts.admin')

@section('title')
 Pertanyaan
@endsection

@section('content')
<!-- Section Content -->
<div
  class="section-content section-dashboard-home"
  data-aos="fade-up"
>
  <div class="container-fluid">
    <div class="dashboard-heading">
        <h2 class="dashboard-title">Pertanyaan</h2>
        <p class="dashboard-subtitle">
            Edit Detail "{{ $item->id }}" Pertanyaan
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
          <form action="{{ route('soaldetailupdate', $item->id) }}" method="post" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Pertanyaan</label>
                      <input type="text" class="form-control" name="pertanyaan" value="{{ $item->pertanyaan }}" required />
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Pilihan A</label>
                      <input type="text" class="form-control" name="pila" value="{{ $item->pila }}" required />
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Pilihan B</label>
                       <input type="text" class="form-control" name="pilb" value="{{ $item->pilb }}" required />
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Pilihan C</label>
                       <input type="text" class="form-control" name="pilc" value="{{ $item->pilc }}" required />
                    </div>
                  </div>

                                 <div class="col-md-12">
                    <div class="form-group">
                      <label>Pilihan D</label>
                       <input type="text" class="form-control" name="pild" value="{{ $item->pild }}" required />
                    </div>
                  </div>

                                 <div class="col-md-12">
                    <div class="form-group">
                      <label>Pilihan E</label>
                       <input type="text" class="form-control" name="pile" value="{{ $item->pile }}" required />
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Kunci</label>
                       <input type="text" class="form-control" name="kunci" value="{{ $item->kunci }}" required />
                    </div>
                  </div>
               
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Status </label>
                      <select name="status"  value="{{ $item->status }}" required class="form-control">
                          <option value="y">Aktiv</option>
                          <option value="n">Non</option>
                        </select>
                    </div>
                  </div>
               
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Score </label>
                       <input type="text" class="form-control" name="score" value="{{ $item->score }}" required />
                    </div>
                  </div>
               
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Soal Id </label>
                      <select name="id" required class="form-control">
                        @foreach ($soal as $soal)
                          <option value="{{ $soal->id }}">{{ $soal->deksripsi }}</option>
                        @endforeach
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

@push('addon-script')
  <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
  <script>
    CKEDITOR.replace('editor');
  </script>
@endpush