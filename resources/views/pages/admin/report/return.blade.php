@extends('layouts.admin')

@section('title')
   Laporan
@endsection

@section('content')
<main class="main">

    <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                 
                        </div>
                        <div class="card-body">
                             @if (session('success'))
                                <div class="alert alert-success">{{ session('success') }}</div>
                            @endif

                            @if (session('error'))
                                <div class="alert alert-danger">{{ session('error') }}</div>
                            @endif

                            <form action="{{ route('report.return') }}" method="get">
                                <div class="input-group mb-3 col-md-4 float-right">
                                    <input type="text" id="created_at" name="date" class="form-control">
                                    <div class="input-group-append">
                                        <button class="btn btn-secondary" type="submit">Filter</button>
                                    </div>
                                    <a target="_blank" class="btn btn-primary ml-2" id="exportpdf">Export PDF</a>
                                </div>
                                <h2 class="dashboard-title">Report Lamaran</h2>
                            </form>
                            
                            <div class="table-responsive">
                  
                            <table class="table table-hover table-bordered">
                                    <thead>
                                        <tr>
                          <th>No KTP</th>
                          <th>Posisi</th>
                          <th>Program</th>
                          <th>Tgl Pengajuan</th>
                          <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                            @forelse($berkas as $item)
                          <tr>
                              {{-- <td>{{ $item->id }}</td> --}}
                              <td>{{ $item->biodata->No_KTP }}</td>
                              <td>{{ $item->lowongan->posisi }}</td>
                              <td>{{ $item->lowongan->program->name }}</td>
                              <td>{{ $item->created_at->format('d-m-Y') }}</td>
                              {{-- <td>{{ $item->program->name }}</td> --}}
                              <td>{{ $item->status }}</td>
                                        </tr>
                                        @empty
                                        <tr>
                                            <td colspan="6" class="text-center">Tidak ada data</td>
                                        </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                                
              </div>
          </div>
      </div>
    </div>
    <!-- /.container-fluid -->
@endsection

@push('addon-script')
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    <script>
        $(document).ready(function() {
            let start = moment().startOf('month')
            let end = moment().endOf('month')

            $('#exportpdf').attr('href', '/admin/return/pdf/' + start.format('YYYY-MM-DD') + '+' + end.format('YYYY-MM-DD'))

            $('#created_at').daterangepicker({
                startDate: start,
                endDate: end
            }, function(first, last) {
                $('#exportpdf').attr('href', '/admin/return/pdf/' + first.format('YYYY-MM-DD') + '+' + last.format('YYYY-MM-DD'))
            })
        })
    </script>
@endpush