@extends('layouts.dashboardv1')
@section('title')

@section('content')
	{{-- <div class="col-md-12">
	  <div class="card card-primary">
	    <div class="card-header with-border">
	      <h3 class="card-title">Soal yang bisa dikerjakan sekarang.</h3>
	      <div class="card-tools pull-right">
	        <button type="button" class="btn btn-card-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
	      </div>
	    </div>
	    <div class="card-body">
		    <div class="row">
		    	@if($soal->count())
					@foreach($soal as $item)
					            @php
                            $check = App\Jawab::where('soals_id', $item->id)->where('users_id', Auth::user()->id)->first();
                        @endphp
			    
				    	<div class="col-sm-4">
				    		@if($check)
			    				<a href="{{ url('pertanyaan-finish'.$item->id) }}">
						    		<div class="info-card bg-yellow">
					            <span class="info-card-icon"><i class="fa fa-check-circle-o" aria-hidden="true"></i></span>
					            <div class="info-card-content">
					        
					              <div class="progress">
					                <div class="progress-bar" style="width: 100%"></div>
					              </div>
				                <span class="progress-description">{{ $item->deskripsi }}</span>
				                <span>Kamu sudah menyelesaikan ujian ini.</span>
					            </div>
					          </div>
						    	</a>
				    		@else
				    			<a href="{{ url('pertanyaan-detail'.$item->id) }}">
						    		<div class="info-card bg-green">
					            <span class="info-card-icon"><i class="fa fa-check-square-o"></i></span>
					            <div class="info-card-content">
					              <div class="progress">
					                <div class="progress-bar" style="width: 100%"></div>
					              </div>
				                <span class="progress-description">{{ $item->deskripsi }}</span>
					            </div>
					          </div>
						    	</a>
			    			@endif
				    	</div>
			    	@endforeach
		    	@else
						<div class="col-md-12">Belum ada soal yang bisa dikerjakan.</div>
		    	@endif
		    </div>
	    </div>
    </div>
  </div> --}}
  <!-- Section Content -->
  <div class="container-fluid">
    <div class="dashboard-heading">
        <h2 class="dashboard-title">Pertanyaan</h2>
        {{-- <p class="dashboard-subtitle">
            Create New Data Pengalaman Organisasi
        </p> --}}
    </div>
    <div class="dashboard-content">
      <div class="row">
        <div class="col-12">

            <div class="card">
              <div class="card-body">
                <div class="row">
		    	@if($soal->count())
					@foreach($soal as $item)
					            @php
                            $check = App\Jawab::where('soals_id', $item->id)->where('users_id', Auth::user()->id)->first();
                        @endphp
			    
				    	<div class="  text-center">
				    		@if($check)
			    				<a href="{{ url('pertanyaan-finish'.$item->id) }}">
						    		{{-- <div class="info-card bg-yellow">
					            <span class="info-card-icon"><i class="fa fa-check-circle-o" aria-hidden="true"></i></span>
					            <div class="info-card-content">
					        
					              <div class="progress">
					                <div class="progress-bar" style="width: 100%"></div>
					              </div> --}}
				                {{-- <span class="progress-description">{{ $item->deskripsi }}</span> --}}
				                <h5>Kamu sudah menyelesaikan ujian ini.</h5>
					            </div>
					          </div>
						    	</a>
							@else
						 </div>
							</div>
								<h5>Selamat Malaksanakan Ujian. </h5>
									 <div class="row">
                 				  <div class="col text-right">
				    			<a  class="btn btn-primary  px-5" href="{{ route('pertanyaan-detail', $item->id) }}">Mulai Ujian
						    		{{-- <div class="info-card bg-green"> --}}
					            {{-- <span class="info-card-icon"><i class="fa fa-check-square-o"></i></span>
					            <div class="info-card-content">
					              <div class="progress">
					                <div class="progress-bar" style="width: 100%"></div>
					              </div>
				                <span class="progress-description">{{ $item->deskripsi }}</span>
					            </div> --}}
					          {{-- </div> --}}
								</a>
						     </div>
              				</div>
           				   </div>
			    			@endif
				    	</div>
			    	@endforeach
		    	@else
						<div class="col-md-12">Belum ada soal yang bisa dikerjakan.</div>
		    	@endif
                </div>

        </div>
      </div>
    </div>
  </div>
</div>
@endsection
@push('addon-css')
<style>
	.bg-aqua{
		background-color: #117e98 !important;
	}
</style>
@endpush