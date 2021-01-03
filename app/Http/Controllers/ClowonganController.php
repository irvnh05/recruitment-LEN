<?php

namespace App\Http\Controllers;

use Yajra\DataTables\Facades\DataTables;
use Illuminate\Http\Request;
use DB;

use App\Lowongan;
use App\Program;

class ClowonganController extends Controller

{  
  function index(Request $request)
    {
     $programs = Program::all();
     
     if(request()->ajax())
     
     {     
         
      if($request->programs)
      {

     $data = DB::table('lowongans')
        ->join('programs', 'programs.id', '=', 'lowongans.programs_id')
        ->select('lowongans.id', 'lowongans.posisi', 'programs.name')
        ->where('lowongans.programs_id', $request->programs);
     }
     else
     {
      $data = DB::table('lowongans')
        ->join('programs', 'programs.id', '=', 'lowongans.programs_id')
        ->select('lowongans.id', 'lowongans.posisi', 'programs.name');
     }

      return datatables()->of($data)
           ->addColumn('action', function ($item) {
                    return '
                        <div class="btn-group">
    
                                    <a class="btn btn-primary" href="' . route('detail', $item->id) . '">
                                        Lihat Detail
                                    </a>
                       
                    </div>';
                })
                ->rawColumns(['action'])
                ->make();
     }  
     

     return view('pages.lowongan', compact('programs','lowongans'));
     
    }

       public function detail(Request $request, $id)
    {
        $lowongan = Lowongan::with(['program'])->where('id', $id)->firstOrFail();

        return view('pages.detaillowongan', [
            'lowongan' => $lowongan
        ]);
    }

}