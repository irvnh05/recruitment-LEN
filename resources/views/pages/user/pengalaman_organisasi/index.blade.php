@extends('layouts.dashboardv1')

@section('title')
 Dashboard
@endsection

@section('content')
<!-- Pengalaman Organisasi -->
<div
    class="section-content section-dashboard-home"
    data-aos="fade-up"
    >
    <div class="container-fluid">
        <div class="dashboard-heading">
            <h2 class="dashboard-title">Data Pengalaman Organisasi</h2>
            {{-- <p class="dashboard-subtitle">
                List of User
            </p> --}}
        </div>
        <div class="dashboard-content">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <a href="{{  route('pengalamanorganisasi.create') }}" class="btn btn-primary mb-3">
                                + Tambah Data Pengalaman Organisasi Baru
                            </a>
                            <div class="table-responsive">
                                <table class="table table-hover scroll-horizontal-vertical w-100" id="crudTable">
                                    <thead>
                                    <tr>
                                        <!-- <th>ID</th> -->
                                        <th>Jabatan</th>
                                        <th>Nama Organisasi</th>
                                        <th>Aksi</th>
                                    </tr>
                                    </thead>
                                    <tbody></tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Pendidikan Non Formal -->
<div
    class="section-content section-dashboard-home"
    data-aos="fade-up"
    >
    <div class="container-fluid">
        <div class="dashboard-heading">
            <h2 class="dashboard-title">Data Harapan</h2>
            {{-- <p class="dashboard-subtitle">
                List of User
            </p> --}}
        </div>
        <div class="dashboard-content">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <a href="{{  route('harapan.create') }}" class="btn btn-primary mb-3">
                                + Tambah Data Harapan Baru
                            </a>
                            <div class="table-responsive">
                                <table class="table table-hover scroll-horizontal-vertical w-100" id="crudTable1">
                                    <thead>
                                    <tr>
                                        <!-- <th>ID</th> -->
                                        <th>Harapan Karir</th>
                                        <th>Permintaan Gaji</th>
                                        <th>Minat Posisi Jika Ditolak</th>
                                        <th>Aksi</th>
                                    </tr>
                                    </thead>
                                    <tbody></tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bahasa -->
<div
    class="section-content section-dashboard-home"
    data-aos="fade-up"
    >
    <div class="container-fluid">
        <div class="dashboard-heading">
            <h2 class="dashboard-title">Data Keluarga/Saudara Di LEN</h2>
            {{-- <p class="dashboard-subtitle">
                List of User
            </p> --}}
        </div>
        <div class="dashboard-content">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <a href="{{  route('keluarga.create') }}" class="btn btn-primary mb-3">
                                + Tambah Data Keluarga/Saudara Di LEN Baru
                            </a>
                            <div class="table-responsive">
                                <table class="table table-hover scroll-horizontal-vertical w-100" id="crudTable2">
                                    <thead>
                                    <tr>
                                        <!-- <th>ID</th> -->
                                        <th>Nama Lengkap</th>
                                        <th>Hubungan</th>
                                        <th>Bagian</th>
                                        <th>Aksi</th>
                                    </tr>
                                    </thead>
                                    <tbody></tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bahasa -->
<div
    class="section-content section-dashboard-home"
    data-aos="fade-up"
    >
    <div class="container-fluid">
        <div class="dashboard-heading">
            <h2 class="dashboard-title">Data Informasi lainya</h2>
            {{-- <p class="dashboard-subtitle">
                List of User
            </p> --}}
        </div>
        <div class="dashboard-content">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <a href="{{  route('infolain.create') }}" class="btn btn-primary mb-3">
                                + Tambah Data Informasi lainya Baru
                            </a>
                            <div class="table-responsive">
                                <table class="table table-hover scroll-horizontal-vertical w-100" id="crudTable3">
                                    <thead>
                                    <tr>
                                        <!-- <th>ID</th> -->
                                        <th>Melamar Melalui</th>
                                        <th>Di Perkenalkan Oleh</th>
                                        <th>Kegiatan Lain</th>
                                        <th>Hobi</th> 
                                        <th>Aksi</th>
                                    </tr>
                                    </thead>
                                    <tbody></tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
{{-- pendidikan formal --}}
@push('addon-script')
    <script>
        // AJAX DataTable
        var datatable = $('#crudTable').DataTable({
            processing: true,
            serverSide: true,
            ordering: true,
//                searching:false,
//   lengthChange: false,
            ajax: {
                 url: "{{ route('pengalamanorganisasi.index') }}",
            },
            columns: [
                // { data: 'id', name: 'id' },
                { data: 'Jabatan', name: 'Jabatan' },
                { data: 'Nama_Organisasi', name: 'Nama_Organisasi' },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searchable: false,
                    width: '15%'
                },
            ]
        });
    </script>

@endpush
{{-- pendidikan non formal --}}
@push('addon-script')
    <script>
        // AJAX DataTable
        var datatable = $('#crudTable1').DataTable({
            processing: true,
            serverSide: true,
            ordering: true,
//                searching:false,
//   lengthChange: false,
            ajax: {
                 url: "{{ route('harapan.index') }}",
            },
            columns: [
                // { data: 'id', name: 'id' },
                { data: 'Harapan_Karir', name: 'Harapan_Karir' },
                { data: 'Permintaan_Gaji', name: 'Permintaan_Gaji' },
                { data: 'Minat_Posisi_Jika_Ditolak', name: 'Minat_Posisi_Jika_Ditolak' },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searchable: false,
                    width: '15%'
                },
            ]
        });
    </script>

@endpush

{{-- bahasa --}}
@push('addon-script')
    <script>
        // AJAX DataTable
        var datatable = $('#crudTable2').DataTable({
            processing: true,
            serverSide: true,
            ordering: true,
//                searching:false,
//   lengthChange: false,
            ajax: {
                 url: "{{ route('keluarga.index') }}",
            },
            columns: [
                // { data: 'id', name: 'id' },
                { data: 'Nama_Lengkap', name: 'Nama_Lengkap' },
                { data: 'Hubungan', name: 'Hubungan' },
                { data: 'Bagian', name: 'Bagian' },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searchable: false,
                    width: '15%'
                },
            ]
        });
    </script>

@endpush

{{-- beasiswa --}}
@push('addon-script')
    <script>
        // AJAX DataTable
        var datatable = $('#crudTable3').DataTable({
            processing: true,
            serverSide: true,
            ordering: true,
//                searching:false,
//   lengthChange: false,
            ajax: {
                 url: "{{ route('infolain.index') }}",
            },
            columns: [
                // { data: 'id', name: 'id' },
                { data: 'Melamar_Melalui', name: 'Melamar_Melalui' },
                { data: 'Diperkenalkan_Oleh', name: 'Diperkenalkan_Oleh' },
                { data: 'Kegiatan_Lain', name: 'Kegiatan_Lain' },
                { data: 'Hobi', name: 'Hobi' },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searchable: false,
                    width: '15%'
                },
            ]
        });
    </script>

@endpush