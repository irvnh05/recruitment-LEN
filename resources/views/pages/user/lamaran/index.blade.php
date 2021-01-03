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
            <h2 class="dashboard-title">Data Lamaran</h2>
            {{-- <p class="dashboard-subtitle">
                List of User
            </p> --}}
        </div>
        <div class="dashboard-content">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        
                        <div class="card-body">
              <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                      <thead>
                      <tr>
                          {{-- <th>ID</th> --}}
                          <th>No KTP</th>
                          <th>Posisi</th>
                          <th>Program</th>
                          <th>Tgl Pengajuan</th>
                          <th>Status</th>
                          {{-- <th>Action</th> --}}
                      </tr>
                      </thead>
                      <tbody>
                      @forelse($items as $item)
                          <tr>
                              {{-- <td>{{ $item->id }}</td> --}}
                              <td>{{ $item->biodata->No_KTP }}</td>
                              <td>{{ $item->lowongan->posisi }}</td>
                              <td>{{ $item->lowongan->program->name }}</td>
                              <td>{{ $item->created_at}}</td>
                              {{-- <td>{{ $item->program->name }}</td> --}}
                              <td>{{ $item->status }}</td>
                              {{-- <td>
                                  <a href="{{ route('lamaran.show', $item->id) }}" class="btn btn-primary">
                                      <i class="fa fa-eye"></i>
                                  </a>
                                  <a href="{{ route('lamaran.edit', $item->id) }}" class="btn btn-info">
                                      <i class="fa fa-pencil-alt"></i>
                                  </a>
                                  <form action="{{ route('lamaran.destroy', $item->id) }}" method="post" class="d-inline">
                                      @csrf
                                      @method('delete')
                                      <button class="btn btn-danger">
                                          <i class="fa fa-trash"></i>
                                      </button>
                                  </form>

                              </td> --}}
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
    <!-- /.container-fluid -->
@endsection
