<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\PengalamanKerja;
use App\Http\Requests\Admin\PengalamanKerjaRequest;
use App\Biodata;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Auth;
class PengalamanKerjaController extends Controller
{

        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->ajax()) {
            // $query = PengalamanKerja::query();
        $query = PengalamanKerja::with(['biodata'])                    
                      ->whereHas('biodata', function($user){
                        $user->where('users_id', Auth::user()->id);
                    })->get();
    
        
        // return view('pages.user.lamaran.index',[
        //     'items' => $items
        // ]);
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
                                    <a class="dropdown-item" href="' . route('pengalamankerja.edit', $item->id) . '">
                                        Sunting
                                    </a>
                                    <form action="' . route('pengalamankerja.destroy', $item->id) . '" method="POST">
                                        ' . method_field('delete') . csrf_field() . '
                                        <button type="submit" class="dropdown-item text-danger">
                                            Hapus
                                        </button>
                                    </form>
                                </div>
                            </div>
                    </div>';
                })
                ->editColumn('photos', function ($item) {
                    return $item->photos ? '<img src="' . Storage::url($item->photos) . '" style="max-height: 80px;"/>' : '';
                })
                ->rawColumns(['action','photos'])
                ->make();
        }

        return view('pages.user.pengalaman_kerja.index');
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.user.pengalaman_kerja.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request )
    {
        $biodata1 = Biodata::where('users_id', '=', Auth::user()->id)->first();
        // $kerja = PengalamanKerja::where('biodatas_id',$biodata1->id)->get();
// dd($kerja);
            PengalamanKerja::create([
            'Nama_Perusahaan'  => $request->Nama_Perusahaan,
            'Tahun'  =>  $request->Tahun,
            'Tugas_TJU'  =>  $request->Tugas_TJU,
            'Gaji'  =>  $request->Gaji,
            'Alasan_Berhenti'  =>  $request->Alasan_Berhenti,
            // 'users_id' => Auth::user()->id,
            'biodatas_id' =>  $biodata1->id,
       ]);

     
//     $biodata1 =  biodata::update([
//         'pengalaman_kerjas_id	'  => $kerja->id,
//    ]);
//    Biodata::where('users_id', '=', Auth::user()->id)->first()->update([
//     'pengalaman_kerjas_id	'  => $kerja->id,
// ]);
    //     $item = PengalamanKerja::where('users_id', '=', Auth::user()->id)->first();
    //     $biodata = Biodata::where('users_id', '=', Auth::user()->id)->first();
    //     $biodata->update([

    //         'pengalaman_kerjas_id' => $item->id,

    //    ]);
        // Biodata::create([
        //     'pengalaman_kerjas_id' => $item->id,
        // ]);
        // $item = PengalamanKerja::where('users_id', '=', Auth::user()->id)->first();

        // if($request->session()->has('users_id', 'Auth::user()->id')) {
        //     return 
        //     Biodata::create([
        //      'pengalaman_kerjas_id' => $item->id,
        // ]);
        // } else {
        //     return
        //      redirect()->route('pengalamankerja.index');
        // }
        
        return redirect()->route('pengalamankerja.index');
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
        $item = PengalamanKerja::findOrFail($id);

        return view('pages.user.pengalaman_kerja.edit',[
            'item' => $item
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PengalamanKerjaRequest $request, $id)
    {
        $data = $request->all();

        $item = PengalamanKerja::findOrFail($id);

        $item->update($data);

        return redirect()->route('pengalamankerja.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = PengalamanKerja::findorFail($id);
        $item->delete();

        return redirect()->route('pengalamankerja.index');

    }
}
