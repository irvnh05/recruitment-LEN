@extends('layouts.dashboardv1')
@section('title')

@section('content')
  <div class="container-fluid">
	<div class="col-md-12">
	  <div class="card">
	    <div class="card-body">
	    	<center>
	    		<!-- @if($soal->kkm < $nilai)
		    		<i class="fa fa-smile-o" aria-hidden="true" style="font-size: 50pt; color: #18b10f;"></i>
		    	@else
		    		<i class="fa fa-frown-o" aria-hidden="true" style="font-size: 50pt; color: #d61515;"></i>
		    	@endif -->
	    		<i class="fa fa-smile-o" aria-hidden="true" style="font-size: 50pt; color: #18b10f;"></i>
	    		<p style="color: #848383; font-size: 14pt; margin: 0">Selamat, kamu telah berhasil menyelesaikan ujian <b>{{ $soal->paket }}</b></p>
	    		<!-- <p style="color: #848383; font-size: 14pt; margin: 0"><small>Nilai yang kamu dapat:</small> <b>{{ number_format($nilai) }}</b></p> -->
	    		<p style="color: #848383; font-size: 14pt; margin: 0">
	    			Nilai kamu sudah keluar, tapi rahasia dulu ya. Tunggu informasi Selanjutnya!
	    			<!-- @if($soal->kkm < $nilai)
	    				Selamat kamu lulus KKM ujian ini.
	    			@else
	    				Sepertinya nilai kamu belum cukup untuk KKM (<b>{{ number_format($soal->kkm) }}</b>) ujian ini. Belajar yang giat ya!
	    			@endif -->
	    		</p>
	    	</center>
	    </div>
	  </div>
	</div>
@endsection