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
            <h2 class="dashboard-title">Lowongan</h2>
            {{-- <p class="dashboard-subtitle">
                List of User
            </p> --}}
        </div>
        <div class="dashboard-content">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        
                        <div class="card-body">
                            {{-- <a href="{{  route('lowongan.create') }}" class="btn btn-primary mb-3">
                                + Tambah Lowongan Baru
                            </a> --}}
                            <div class="table-responsive">
                                
                                <table class="table table-hover scroll-horizontal-vertical w-100" id="crudTable">

                                    <thead>
                                    <tr>
                                        <!-- <th>ID</th> -->
                                        <th>Posisi</th>
                                        {{-- <th>Gaji</th>
                                        <th>Deksripsi</th>
                                        <th>Kriteria Penting</th> --}}
                                        <th>Tgl Awal</th>
                                        <th>Tgl Akhir</th>
                                        <th>Program</th>
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

            ajax: {
                url: '{!! url()->current() !!}',
            },
            columns: [
                // { data: 'id', name: 'id' },
                { data: 'posisi', name: 'posisi' },
                // { data: 'gaji', name: 'gaji' },
                // { data: 'deksripsi', name: 'deksripsi' },
                // { data: 'kriteria_penting', name: 'kriteria_penting' },
                { data: 'tgl_awal', name: 'tgl_awal' },
                { data: 'tgl_akhir', name: 'tgl_akhir' },
                { data: 'program.name', name: 'program.name' },
                
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searchable: false,
                    width: '15%'
                },
            ]
        });

    // $('.programs_filter').change(function () {
    //     table.column( $(this).data('column'))
    //     .search( $(this).val() )
    //     .draw();
    // });
        
    </script>
@endpush