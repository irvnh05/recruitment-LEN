@extends('layouts.dashboardv1')

@section('title')
 Dashboard
@endsection

@section('content')
<!-- Pendidikan Formal -->
<div
    class="section-content section-dashboard-home"
    data-aos="fade-up"
    >
    <div class="container-fluid">
        <div class="dashboard-heading">
            <h2 class="dashboard-title">Data Pendidikan Formal</h2>
            {{-- <p class="dashboard-subtitle">
                List of User
            </p> --}}
        </div>
        <div class="dashboard-content">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <a href="{{  route('pendidikanformal.create') }}" class="btn btn-primary mb-3">
                                + Tambah Data Pendidikan Formal Baru
                            </a>
                            <div class="table-responsive">
                                <table class="table table-hover scroll-horizontal-vertical w-100" id="crudTable">
                                    <thead>
                                    <tr>
                                        <!-- <th>ID</th> -->
                                        <th>Nama Lembaga</th>
                                        <th>Tahun</th>
                                        <th>Jurusan</th>
                                        <th>Tingkat</th>
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
            <h2 class="dashboard-title">Data Pendidikan Non Formal</h2>
            {{-- <p class="dashboard-subtitle">
                List of User
            </p> --}}
        </div>
        <div class="dashboard-content">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <a href="{{  route('pendidikannonformal.create') }}" class="btn btn-primary mb-3">
                                + Tambah Data Pendidikan Non Formal Baru
                            </a>
                            <div class="table-responsive">
                                <table class="table table-hover scroll-horizontal-vertical w-100" id="crudTable1">
                                    <thead>
                                    <tr>
                                        <!-- <th>ID</th> -->
                                        <th>Nama Lembaga</th>
                                        <th>Tahun</th>
                                        <th>Bidang Keilmuan</th>
                                        <th>Keterangan</th>
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
            <h2 class="dashboard-title">Data Bahasa</h2>
            {{-- <p class="dashboard-subtitle">
                List of User
            </p> --}}
        </div>
        <div class="dashboard-content">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <a href="{{  route('bahasa.create') }}" class="btn btn-primary mb-3">
                                + Tambah Data Bahasa Baru
                            </a>
                            <div class="table-responsive">
                                <table class="table table-hover scroll-horizontal-vertical w-100" id="crudTable2">
                                    <thead>
                                    <tr>
                                        <!-- <th>ID</th> -->
                                        <th>Bahasa</th>
                                        <th>Lisan</th>
                                        <th>Tulisan</th>
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
            <h2 class="dashboard-title">Data Beasiswa</h2>
            {{-- <p class="dashboard-subtitle">
                List of User
            </p> --}}
        </div>
        <div class="dashboard-content">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <a href="{{  route('beasiswa.create') }}" class="btn btn-primary mb-3">
                                + Tambah Data Beasiswa Baru
                            </a>
                            <div class="table-responsive">
                                <table class="table table-hover scroll-horizontal-vertical w-100" id="crudTable3">
                                    <thead>
                                    <tr>
                                        <!-- <th>ID</th> -->
                                        <th>Lembaga Beasiswa</th>
                                        <th>Tahun</th>
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
                 url: "{{ route('pendidikanformal.index') }}",
            },
            columns: [
                // { data: 'id', name: 'id' },
                { data: 'Nama_Lembaga', name: 'Nama_Lembaga' },
                { data: 'Tahun', name: 'Tahun' },
                { data: 'Jurusan', name: 'Jurusan' },
                { data: 'Tingkat', name: 'Tingkat' },
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
                 url: "{{ route('pendidikannonformal.index') }}",
            },
            columns: [
                // { data: 'id', name: 'id' },
                { data: 'Nama_Lembaga', name: 'Nama_Lembaga' },
                { data: 'Tahun', name: 'Tahun' },
                { data: 'Jurusan', name: 'Jurusan' },
                { data: 'Tingkat', name: 'Tingkat' },
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
                 url: "{{ route('bahasa.index') }}",
            },
            columns: [
                // { data: 'id', name: 'id' },
                { data: 'Bahasa', name: 'Bahasa' },
                { data: 'Lisan', name: 'Lisan' },
                { data: 'Tulisan', name: 'Tulisan' },
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
                 url: "{{ route('beasiswa.index') }}",
            },
            columns: [
                // { data: 'id', name: 'id' },
                { data: 'Lembaga', name: 'Lembaga' },
                { data: 'Tempat', name: 'Tempat' },
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