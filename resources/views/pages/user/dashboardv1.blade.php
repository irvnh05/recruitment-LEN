@extends('layouts.dashboardv1')

@section('title')
Dashboard | E-Recruitment
@endsection

@section('content')

<div class="main-content container-fluid">
    <div class="page-title">
        <h3>Dashboard</h3>
        <p class="text-subtitle text-muted">A good dashboard to display your statistics</p>
    </div>
    <section class="section">
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">
                        <h4>Lowongan Tersedia</h4>
                    </div>
                    <div class="card-body">
                        <h1>{{ $lowongan }} </h1>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h4>Pengumuman Terbaru</h4>
                    </div>
                    <div class="card-body">
                        <h1>{{ $pengumuman->deksripsi }} </h1>
                    </div>
                </div>
            </div>
        </div>
</div>

<div class="main-content container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>History Lamaran</h3>
            </div>
        </div>
    </div>
    <div class="row" id="basic-table">
        <div class="col-12 col-md-12">
            <div class="card">
                <div class="card-content">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
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
    </div>
    @endsection
