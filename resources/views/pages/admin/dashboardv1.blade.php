@extends('layouts.admin')

@section('title')
Admin Dashboard | E-Recruitment
@endsection

@section('content')

<div class="main-content container-fluid">
    <div class="page-title">
        <h3>Admin Dashboard</h3>
        <p class="text-subtitle text-muted">A good dashboard to display your statistics</p>
    </div>
    <section class="section">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h4>Lowongan Tersedia</h4>
                    </div>
                    <div class="card-body">
                        <h1>{{ $lowongan }}</h1>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h4>Pelamar</h4>
                    </div>
                    <div class="card-body">
                        <h1>{{ $pelamar }}</h1>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h4>Lolos Seleksi</h4>
                    </div>
                    <div class="card-body">
                        <h1>{{ $lolosseleksi }}</h1>
                    </div>
                </div>
            </div>
        </div>
</div>
{{-- 
<div class="main-content container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Lamaran</h3>
            </div>
        </div>
    </div>
    <div class="row" id="basic-table">
        <div class="col-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Update Lamaran</h4>
                </div>
                <div class="card-content">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Jumlah Pelamar</th>
                                    <th>Posisi</th>
                                    <th>Unit</th>
                                    <th>Program</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-bold-500">12</td>
                                    <td class="text-bold-500">Admin</td>
                                    <td>Unit A</td>
                                    <td>Magang</td>         
                                    <td><a href="#" class="badge btn-info">Lihat Detail</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    @endsection
