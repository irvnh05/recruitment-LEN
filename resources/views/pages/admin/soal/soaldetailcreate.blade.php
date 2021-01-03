@extends('layouts.admin')

@section('title')
    Soal
@endsection

@section('content')
<!-- Section Content -->
<div
  class="section-content section-dashboard-home"
  data-aos="fade-up"
>
  <div class="container-fluid">
    <div class="dashboard-heading">
        <h2 class="dashboard-title">Soal</h2>
        <p class="dashboard-subtitle">
            Create New Soal
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
          <form action="{{ route('store1' , $soal->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Pertanyaan</label>
                      <textarea name="pertanyaan" id="editor"></textarea>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Pilihan A</label>
                       <textarea name="pila" id="editor1"></textarea>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Pilihan B</label>
                      <textarea name="pilb" id="editor2"></textarea>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Pilihan C</label>
                      <textarea name="pilc" id="editor3"></textarea>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Pilihan D</label>
                      <textarea name="pild" id="editor4"></textarea>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Pilihan E</label>
                      <textarea name="pile" id="editor5"></textarea>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Kunci</label>
                      <div class="radio">
                      <label><input type="radio" name="kunci" id="a" value="A"> Jawaban <b>A</b></label> &nbsp;&nbsp;&nbsp;
                      <label><input type="radio" name="kunci" id="b" value="B"> Jawaban <b>B</b></label> &nbsp;&nbsp;&nbsp;
                      <label><input type="radio" name="kunci" id="c" value="C"> Jawaban <b>C</b></label> &nbsp;&nbsp;&nbsp;
                      <label><input type="radio" name="kunci" id="d" value="D"> Jawaban <b>D</b></label> &nbsp;&nbsp;&nbsp;
                      <label><input type="radio" name="kunci" id="e" value="E"> Jawaban <b>E</b></label>
                </div>
                    </div>
                                      <div class="col-md-12">
                    <div class="form-group">
                      <label>Score</label>
                      <input type="text" class="form-control" name="score" required />
                    </div>
                  </div>
                                    <div class="col-md-12">
                    <div class="form-group">
                      <label>Status</label>
                      <div class="radio">
                      <label><input type="radio" name="status"  value="N"> Tidak Aktiv</label> &nbsp;&nbsp;&nbsp;
                      <label><input type="radio" name="status"  value="Y"> Aktiv </label> &nbsp;&nbsp;&nbsp;
                </div>
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


@push('addon-script')
  <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
  <script>
    CKEDITOR.replace('editor');
    CKEDITOR.replace('editor1');
    CKEDITOR.replace('editor2');
    CKEDITOR.replace('editor3');
    CKEDITOR.replace('editor4');
    CKEDITOR.replace('editor5');
  </script>
@endpush