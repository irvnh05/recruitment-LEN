@extends('layouts.admin')
@section('title', 'Laporan')

@section('content')
  <div class="container-fluid">
<div class="col-md-12">
  <div class="box box-primary">
  	<div class="box-header with-border">
      <h3 class="box-title">Laporan<small>
    </div>
    <div class="box-body">
      {{-- <a href="{{ url('/cetak/excel/hasil-ujian-perkelas/'.$soal->id.'/'.$kelas->id) }}" class="btn btn-success btn-md"><i class="fa fa-file-excel-o"></i> Download Hasil Ujian</a> --}}
      <hr>
      <table class="table table-condensed table-hover" id="table_detail">
        {{-- <caption><i>Soal <small>{{ $soal->id }}</small></i></caption> --}}
        <thead>
          <tr>
            <th>Nama</th>
            <th>Nilai</th>
            <th style="text-align: center;">Aksi</th>
          </tr>
        </thead>
      </table>
    </div>
  </div>
</div>
@endsection
@push('css')
<link rel="stylesheet" href="{{URL::asset('assets/plugins/datatables/media/css/dataTables.bootstrap.css')}}">
<link rel="stylesheet" href="{{URL::asset('assets/plugins/datatables/extensions/Responsive/css/responsive.dataTables.css')}}">
<link rel="stylesheet" href="{{URL::asset('assets/plugins/datatables/extensions/FixedHeader/css/fixedHeader.bootstrap.css')}}">
@endpush
@push('scripts')
<script src="{{URL::asset('assets/plugins/datatables/media/js/jquery.dataTables.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatables/media/js/dataTables.bootstrap.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatables/extensions/Responsive/js/dataTables.responsive.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatables/extensions/FixedHeader/js/dataTables.fixedHeader.js')}}"></script>
<script>
$(document).ready(function (){
  table_paket_soal = $('#table_detail').DataTable({
    processing: true,
    serverSide: true,
    responsive: true,
    lengthChange: true,
    ajax: {
      url: '{!! route('laporan_soal') !!}',
      data: { "users_id": '{{ $user->id }}'},
    },
    columns: [
      {data: 'name', name: 'name', orderable: true, searchable: true },
      {data: 'jumlah_nilai', name: 'jumlah_nilai', orderable: true, searchable: true },
      {data: 'action', name: 'action', orderable: false, searchable: false, },
    ],
    "drawCallback": function (setting) {}
  });
});
</script>
@endpush