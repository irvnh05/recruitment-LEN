@extends('layouts.dashboardv1')

@section('title')
 Dashboard
@endsection

@section('content')
<div
    class="section-content section-dashboard-home"
    data-aos="fade-up"
    >
    <div class="container-fluid">
        <div class="dashboard-heading">
            <h2 class="dashboard-title">Data Lamaran</h2>
            {{-- <p class="dashboard-subtitle">
                List of User
            </p> --}}
        </div>
        <div class="dashboard-content">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        
                        <div class="card-body">
              <div class="table-responsive">
              <table class="table">
                            <thead>
                                <tr>
                                    <th>No KTP</th>
                                    <th>Posisi</th>
                                    <th>Program</th>
                                    <th>Tgl Pengajuan</th>
                                    <th>Status</th>
                                    {{-- <th>Aksi</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                         @forelse($items as $item)
                                <tr>
                                    <td class="text-bold-500">{{ $item->biodata->No_KTP }}</td>
                                    <td class="text-bold-500">{{ $item->lowongan->posisi }}</td>
                                    <td class="text-bold-500">{{ $item->lowongan->program->name }}</td>
                                    <td>{{ $item->created_at}}</td>
                                    <td>
                                        <span class="badge bg-danger">{{ $item->status }} </span>
                                    </td>
                                    {{-- <td><a href="#" class="badge btn-info">Lihat Detail</a></td> --}}
                                </tr>
                        @empty
                          <td colspan="7" class="text-center">
                              Data Kosong
                          </td>
                      @endforelse
                            </tbody>
                        </table>
              </div>
          </div>
      </div>
    </div>
    <!-- /.container-fluid -->
@endsection
