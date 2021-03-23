@extends('layouts.dashboardv1')

@section('title')
 Dashboard
@endsection

@section('content')
<!-- Section Content -->
<div
    class="section-content section-dashboard-home"
    data-aos="fade-up"
    >
    <div class="container-fluid">
        <div class="dashboard-heading">
            <h2 class="dashboard-title">Data Pengalaman Kerja</h2>
            {{-- <p class="dashboard-subtitle">
                List of User
            </p> --}}
        </div>
        <div class="dashboard-content">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <a href="{{  route('pengalamankerja.create') }}" class="btn btn-primary mb-3">
                                + Tambah Data Pengalaman Kerja Baru
                            </a>
                            <div class="table-responsive">
                                <table class="table table-hover scroll-horizontal-vertical w-100" id="crudTable">
                                    <thead>
                                    <tr>
                                        <!-- <th>ID</th> -->
                                        <th>Nama Perusahaan</th>
                                        <th>Tahun</th>
                                        <th>Tugas TJU</th>
                                        <th>Gaji</th>
                                        <th>Alasan Berhenti</th>
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
                url: '{!! url()->current() !!}',
            },
            columns: [
                // { data: 'id', name: 'id' },
                { data: 'Nama_Perusahaan', name: 'Nama_Perusahaan' },
                { data: 'Tahun', name: 'Tahun' },
                { data: 'Tugas_TJU', name: 'Tugas_TJU' },
                { data: 'Gaji', name: 'Gaji' },
                { data: 'Alasan_Berhenti', name: 'Alasan_Berhenti' },
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