@extends('layouts.admin')

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
            <h2 class="dashboard-title">Pelamar</h2>
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
                                        {{-- <th>ID</th> --}}
                                        <th>No KTP</th>
                                        <th>Posisi</th>
                                        {{-- <th>Score</th> --}}
                                        {{-- <th>Program</th>
                                        <th>Tgl Pengajuan</th> --}}
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                    {{-- @forelse($nilai as $item)
                          <tr> --}}
                                                 {{-- $jawabs->jumlah_nilai;                      --}}
                              {{-- <td>{{ $item->id }}</td>
                              <td>{{ $item->biodata->No_KTP }}</td>
                              <td>{{ $item->lowongan->posisi }}</td>
                              <td>{{ $item->lowongan->program->name }}</td>
                              <td>{{ $item->created_at->format('d-m-Y') }}</td>
                              <td>{{ $item->program->name }}</td>
                              <td>{{ $item->status }}</td> --}}
                               {{-- <td>{{ ($nilai->jumlah_nilai) }}</td> --}}
                                        {{-- </tr>
                                        @empty
                                        <tr>
                                            <td colspan="6" class="text-center">Tidak ada data</td>
                                        </tr>
                                        @endforelse --}}
                                    </tbody>
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
                { data: 'biodata.No_KTP', name: 'biodata.No_KTP' },
                { data: 'lowongan.posisi', name: 'lowongan.posisi' },
                // { data: '$nilai->c', name: 'jawab.score' },
                // { data: 'lowongan.program_id', name: 'lowongan.programs_id' },
                // { data: 'created_at', name: 'created_at' },
                // {  return $nilai->jumlah_nilai }
                { data: 'status', name: 'status' },
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