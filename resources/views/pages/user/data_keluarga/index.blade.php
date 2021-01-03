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
            <h2 class="dashboard-title">Data Keluarga</h2>
            {{-- <p class="dashboard-subtitle">
                List of User
            </p> --}}
        </div>
        <div class="dashboard-content">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <a href="{{  route('datakeluarga.create') }}" class="btn btn-primary mb-3">
                                + Tambah Data Keluarga Baru
                            </a>
                            <div class="table-responsive">
                                <table class="table table-hover scroll-horizontal-vertical w-100" id="crudTable">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nama Lengkap</th>
                                        <th>Tempat,tanggal lahir</th>
                                        <th>Hubungan</th>
                                        <th>Pekerjaan/Sekolah</th>
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
                { data: 'id', name: 'id' },
                { data: 'Nama_Lengkap', name: 'Nama_Lengkap' },
                { data: 'TTL', name: 'TTL' },
                { data: 'Hubungan', name: 'Hubungan' },
                { data: 'PekerjaanSekolah', name: 'PekerjaanSekolah' },
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