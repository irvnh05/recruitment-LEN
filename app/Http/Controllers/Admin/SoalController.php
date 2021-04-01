<?php

namespace App\Http\Controllers\Admin;

use App\DetailSoal;
use App\Http\Controllers\Controller;
use App\User;
use App\Soal;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Admin\SoalRequest;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;

class SoalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->ajax()) {
            $query = Soal::with(['user']);

            return Datatables::of($query)
                ->addColumn('action', function ($item) {
                    return '
                        <div class="btn-group">
                            <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle mr-1 mb-1" 
                                    type="button" id="action' .  $item->id . '"
                                        data-toggle="dropdown" 
                                        aria-haspopup="true"
                                        aria-expanded="false">
                                        Aksi
                                </button>
                                <div class="dropdown-menu" aria-labelledby="action' .  $item->id . '">
                                    <a class="dropdown-item" href="' . route('detail-soal', $item->id) . '">
                                        Detail
                                    </a>
                                    <a class="dropdown-item" href="' . route('soal.edit', $item->id) . '">
                                        Sunting
                                    </a>
                                    <form action="' . route('soal.destroy', $item->id) . '" method="POST">
                                        ' . method_field('delete') . csrf_field() . '
                                        <button type="submit" class="dropdown-item text-danger">
                                            Hapus
                                        </button>
                                    </form>
                                </div>
                            </div>
                    </div>';
                })
                ->rawColumns(['action'])
                ->make();
        }

        return view('pages.admin.soal.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.soal.create');
    }
    public function soaldetailcreate(Request $request)
    {
      $soals_id = $request->id;
      $soal = Soal::where('id', $request->id)->first();
      $soals = Detailsoal::where('soals_id', $request->id)->get();

        return view('pages.admin.soal.soaldetailcreate', compact( 'soal', 'soals', 'soals_id'));
        // return view('pages.admin.soal.soaldetailcreate');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = $request->all();

        Soal::create($data);
  
        return redirect()->route('soal.index');

        
    }

    public function store1(Request $request , $id )
    {
         $soals_id = Soal::findOrFail($id);
    //   $soal = Soal::where('id', $request->id)->first();
    //   $soals = Detailsoal::where('soals_id', $request->id)->get();
        // $data = $request->all();
      

        // DetailSoal::create($data);
        DetailSoal::create([
            'soals_id' => $id,
            'pertanyaan' => $request->pertanyaan,
            'pila' => $request->pila,
            'pilb' => $request->pilb,
            'pilc' => $request->pilc,
            'pild' => $request->pild,
            'pile' => $request->pile, 
            'kunci' => $request->kunci,
            'status' => $request->status,
            'score' => $request->score,
        ]);
        return redirect()->route('detail-soal', $id);

        // return view('pages.admin.soal.detail');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
                $item = Soal::findOrFail($id);

        return view('pages.admin.soal.edit',[
            'item' => $item
        ]);
    }

    public function editdetail($id)
    {
        $item = DetailSoal::findOrFail($id);
        $soal = Soal::with(['user'])->where('tampil','aktiv')->get();
        // $soal = DetailSoal::with(['soal']) ->whereHas('soal', function($soal){
        //     $soal->where('tampil','aktiv');
        // })->get();
        // dd($soal);
        return view('pages.admin.soal.editdetail',[
            'item' => $item,
            'soal' => $soal,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();

        $item = Soal::findOrFail($id);

        $item->update($data);

        return redirect()->route('soal.index');
    }

    public function updatedetail(Request $request, $id)
    {
        $data = $request->all();

        $item = DetailSoal::findOrFail($id);

        $item->update($data);

        return redirect()->route('detail-soal',$item->soals_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Soal::findorFail($id);
        $item->delete();

        return redirect()->route('soal.index');

    }

    public function destroydetailsoal($id)
    {

        $item = DetailSoal::findorFail($id);
        $item->delete();

        return redirect()->route('detail-soal', $item->soals_id);
    }
      public function detail(Request $request)
  {
    // if (Auth::user()->status == 'G' or Auth::user()->status == 'A') {
    //   $id_soal = $request->id;
    //   $user = User::where('id', Auth::user()->id)->first();
    //   $soal = Soal::where('id', $request->id)->first();
    //   $soals = Detailsoal::where('id_soal', $request->id)->get();
    //   $cekDistribusisoal = Distribusisoal::get();
    //   if (count($cekDistribusisoal) > 0) {
    //     $kelas = Kelas::leftjoin('distribusisoals', 'kelas.id', '=', 'distribusisoals.id_kelas')
    //       ->select('distribusisoals.id_soal', 'kelas.*')
    //       ->orderBy('kelas.id', 'ASC')
    //       ->groupBy('kelas.id')
    //       ->get();
    //   } else {
    //     $kelas = Kelas::get();
    //   }
    //   return view('soal.detail', compact('user', 'soal', 'soals', 'kelas', 'id_soal'));
    // } else {
      $soals_id = $request->id;
      $soal = Soal::where('id', $request->id)->first();
      $soals = Detailsoal::where('soals_id', $request->id)->get();
      
      if (request()->ajax()) {
           $query = Detailsoal::where('soals_id', $request->id)->get();

            return Datatables::of($query)
                ->addColumn('action', function ($item) {
                    return '
                        <div class="btn-group">
                            <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle mr-1 mb-1" 
                                    type="button" id="action' .  $item->id . '"
                                        data-toggle="dropdown" 
                                        aria-haspopup="true"
                                        aria-expanded="false">
                                        Aksi
                                </button>
                                <div class="dropdown-menu" aria-labelledby="action' .  $item->id . '">
                                    <a class="dropdown-item" href="' . route('soal.editdetail', $item->id) . '">
                                        Sunting
                                    </a>
                                    <form action="' . route('deletedetailsoal', $item->id) . '" method="POST">
                                        ' . method_field('delete') . csrf_field() . '
                                        <button type="submit" class="dropdown-item text-danger">
                                            Hapus
                                        </button>
                                    </form>
                                </div>
                            </div>
                    </div>';
                })
                ->rawColumns(['action'])
                ->make();
        }

        return view('pages.admin.soal.detail', compact( 'soal', 'soals', 'soals_id'));
    }

      public function detailDataSoal(Request $request)
  {
    if (Auth::user()->roles == 'ADMIN') {
      $id_soal = $request->id;
      $user = User::where('id', Auth::user()->id)->first();
      $soal = Detailsoal::where('id', $request->id)->first();
      return view('pages.admin.soal.soaldetailcreate', compact('user', 'soal', 'id_soal'));
    } else {
      return redirect()->route('soal.index');
    }
  }
  }