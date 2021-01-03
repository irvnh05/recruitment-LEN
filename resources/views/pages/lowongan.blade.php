@extends('layouts.app')

@section('title')
Lowongan | PT.LEN
@endsection

@section('content')

<!--====== PRICING PART START ======-->

<section id="lowongan" class="lowongan">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="text-center pb-10">
                    <h2 class="lowongan title">Mari Bergabung Bersama Kami</h2>
                    <div class="newsletter">
                        <form action="#">
                              <select name="programs_filter" id="programs_filter" class="form-control">
        <option value="">Select Program</option>
        @foreach($programs as $row)
        <option value="{{ $row->id }}">{{ $row->name }}</option>
        @endforeach
       </select>
                        </form>

                    <div class="lowongan ">
                        <div class="col-13 col-md-13">
                            <div class="table-responsive">
                               <table class="table table-hover scroll-horizontal-vertical w-100"id="table">
                                    <thead>
                                        <tr>
                                            <th>Posisi</th>
                                            <th>Program</th>
                                            {{-- <th>Lokasi</th> --}}
                                            <th>Lihat</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                 
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- section title -->
    </div>
    </div> <!-- row -->

    </div> <!-- conteiner -->
    </br></br></br></br></br></br>
</section>

<!--====== PRICING PART ENDS ======-->

@endsection

@push('addon-script')
<script>
$(document).ready(function(){
 
 fetch_data();
 
 function fetch_data(programs = '')
 {
  $('#table').DataTable({
   processing: true,
   serverSide: true,
   searching:false,
  lengthChange: false,
   ajax: {
    url:"{{ route('lowongan') }}",
    data: {programs:programs}
   },
   columns:[
    {
     data:'posisi',
     name:'posisi'
    },
    {
     data:'name',
     name:'name'
    },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searchable: false,
                    width: '15%'
                },
            ]
        });
 }
 
 $('#programs_filter').change(function(){
  var id = $('#programs_filter').val();
 
  $('#table').DataTable().destroy();
 
  fetch_data(id);
 });


});


</script>
@endpush
