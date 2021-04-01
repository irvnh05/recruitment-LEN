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

            <h2 class="dashboard-title">Hasil Ujian </h2>
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
                                         <th>Soal</th> 
                                         <th>Pertanyaan</th>            
                                         <th>Jawaban</th>
                                         <th>Kunci</th> 
                                         <th>Score</th>                                    
                                         <!-- <th>Kunci</th>     -->

                                    </tr>
                                    </thead>
                                    
                                    <tbody>
                
                                    @forelse($cek as $item)
                          <tr>              
                               <!-- <td>{{ $item->id }}</td> -->
                               <td>{{ $item->detailSoal->soal->deksripsi }}</td>
                               <td>{{ $item->detailSoal->pertanyaan }}</td>
                               <td>{{ $item->pilihan }}</td>
                               <!-- <td>{{ $item->score }}</td>       -->
                               <td>{{ $item->detailSoal->kunci }}</td>      
                               <td>{{ $item->score }}</td>    
                                                       
                                       </tr>
                                       
                                        @empty
                                        <tr>
                                            <td colspan="6" class="text-center">Tidak ada data</td>
                                        </tr>
                                        @endforelse 
                                    </tbody>
                                    <tr>
      <th colspan="4" >Score Akhir</th>
      <th>{{ $total }}</th>

     </tr>
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
