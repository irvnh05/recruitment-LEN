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
            <h2 class="dashboard-title">Lampiran</h2>
            {{-- <p class="dashboard-subtitle">
                List of User
            </p> --}}
        </div>
        <div class="dashboard-content">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        
                        <div class="card-body">
                            <a href="{{  route('lampiran.create') }}" class="btn btn-primary mb-3">
                                + Tambah Lampiran Baru
                            </a>
                            <div class="table-responsive">
                                
                                <table class="table table-hover scroll-horizontal-vertical w-100" id="crudTable">

                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nama Lampiran</th>
                                        <th>Lampiran</th>
                                        <th>Nama Institusi</th>
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
                { data: 'id', name: 'id' },
                { data: 'Nama_Lampiran', name: 'Nama_Lampiran' },
                { data: 'Lampiran', name: 'Lampiran' },
                { data: 'Nama_Institusi', name: 'Nama_Institusi' },
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