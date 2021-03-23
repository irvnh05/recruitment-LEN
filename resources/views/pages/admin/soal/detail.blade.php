@extends('layouts.admin')
@section('title')

@section('content')
<div
    class="section-content section-dashboard-home"
    data-aos="fade-up"
    >
    <div class="container-fluid">
        <div class="dashboard-heading">
            <h2 class="dashboard-title">Soal Detail {{$soal->deksripsi}}</h2>
            {{-- <p class="dashboard-subtitle">
                List of User
            </p> --}}
        </div>
        <div class="dashboard-content">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                                                {{-- @foreach ($soal as $item) --}}
                                                    
                                                
               
                            <a href="{{  route('buat-soal', $soal->id) }}" class="btn btn-primary mb-3">
                                + Tambah Soal Baru
                            </a>
                                   {{-- @endforeach --}}
                            <div class="table-responsive">
                                <table class="table table-hover scroll-horizontal-vertical w-100" id="crudTable">
                                    <thead>
                                    <tr>
                                        <!-- <th>ID</th> -->
                                        <th>Pertanyaan</th>
                                        {{-- <th>pila</th>
                                        <th>pilb</th>
                                        <th>pilc</th>
                                        <th>pild</th>
                                        <th>pile</th> --}}
                                        <th>kunci</th>
                                        <th>status</th>
                                        <th>score</th>
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
            searching:false,
            lengthChange: false,
            ajax: {
                url: '{!! url()->current() !!}',
            },
            columns: [
                // { data: 'id', name: 'id' },
                { data: 'pertanyaan', name: 'pertanyaan' },
                { data: 'kunci', name: 'kunci' },
                { data: 'status', name: 'status'  } ,
                { data: 'score', name: 'score' } ,
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