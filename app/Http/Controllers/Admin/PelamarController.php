<?php

namespace App\Http\Controllers\Admin;

use App\Bahasa;
use App\Http\Controllers\Controller;
use App\Berkas;
use App\Http\Requests\Admin\BerkasRequest;
use App\Jawab;
use App\Biodata;
use App\DataKeluarga;
use App\Harapan;
use App\InfoLain;
use App\Lampiran;
use Illuminate\Http\Request;
use Mail;
use App\Mail\StatusSuccess;
use App\PendidikanFormal;
use App\PendidikanLain;
use App\PengalamanKerja;
use App\PengalamanOrganisasi;
use App\Proses_Sel_Prsh_Lain;
use App\ProsesPengBeasiswa;
use App\SdrKwnLen;
use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\Str;
// use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;
// use Illuminate\Support\Facades\Auth;
class PelamarController extends Controller
{
        public function index()
    {
                if (request()->ajax()) {
            $query =  Berkas::with(['lowongan', 'biodata'])->get();       
         
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
                                    <a class="dropdown-item" href="' . route('pelamar.edit', $item->id) . '">
                                        Sunting Status
                                    </a>
                                    <a class="dropdown-item text-warning" href="' . route('pelamar.show',  $item->biodatas_id) . '">
                                        Lihat CV
                                    </a>
                                    <a class="dropdown-item text-info" href="' . route('pelamar.result', $item->biodata->users_id) . '">
                                        Lihat Hasil Test
                                    </a>
                                    <form action="' . route('pelamar.destroy', $item->id) . '" method="POST">
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
                     
    
        
        return view('pages.admin.pelamar.index');
        // $items = Berkas::with([
        //  'lowongan', 'biodata'
        // ])->get();
        
        // $programs = Program::all();
        // $lowongans = Lowongan::all();

        // return view('pages.user.lamaran.index',[
        //     'items' => $items
        // ]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BerkasRequest $request)
    {
        $data = $request->all();

        Berkas::create($data);
        return redirect()->route('lamaran.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item =  Berkas::with(['lowongan', 'biodata'])
        ->where('biodatas_id', $id)->first();
        $kerja = PengalamanKerja::with((['biodata']))
        ->where('biodatas_id', $id)->get();
        $keluarga = DataKeluarga::with((['biodata']))
        ->where('biodatas_id', $id)->get();
        $berkas = Lampiran::with((['biodata']))
        ->where('biodatas_id', $id)->get();
        $formal = PendidikanFormal::with((['biodata']))
        ->where('biodatas_id', $id)->get();
        $non = PendidikanLain::with((['biodata']))
        ->where('biodatas_id', $id)->get();
        $bahasa = Bahasa::with((['biodata']))
        ->where('biodatas_id', $id)->get();
        $beasiswa = ProsesPengBeasiswa::with((['biodata']))
        ->where('biodatas_id', $id)->get();
        $organisasi = PengalamanOrganisasi::with((['biodata']))
        ->where('biodatas_id', $id)->get();
        $harapan = Harapan::with((['biodata']))
        ->where('biodatas_id', $id)->get();
        $infolain = InfoLain::with((['biodata']))
        ->where('biodatas_id', $id)->get();
        $sdrkwnlen = SdrKwnLen::with((['biodata']))
        ->where('biodatas_id', $id)->get();
        $seleksiperusahaanlain = Proses_Sel_Prsh_Lain::with((['biodata']))
        ->where('biodatas_id', $id)->get();

        
        
        // ->whereHas('users_id', auth()->user()->id)->get();

        // dd($item);
        return view('pages.admin.pelamar.show',[
            'item'                   => $item,
            'kerja'                  => $kerja,
            'keluarga'               => $keluarga,
            'berkas'                 => $berkas,
            'formal'                 => $formal,
            'non'                    => $non,
            'bahasa'                 => $bahasa,
            'beasiswa'               => $beasiswa, 
            'organisasi'             => $organisasi,
            'harapan'                => $harapan,
            'infolain'               => $infolain,
            'sdrkwnlen'              => $sdrkwnlen,
            'seleksiperusahaanlain'  => $seleksiperusahaanlain, 
        ]);
    }
    
    public function download($file){
        $file_path = public_path('uploads/cv/'.$file);
        return response()->download( $file_path);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Berkas::with(['lowongan', 'biodata'])->findOrFail($id);

        return view('pages.admin.pelamar.edit',[
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
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $item =  Berkas::with(['lowongan', 'biodata'])->findOrFail($id);
        // $item = Berkas::findOrFail($id);

        $item->update($data);

        // kirim notifikasi ke email untuk interview
        Mail::to($item->biodata->user->email)->send(
            new StatusSuccess($item)
        );

        return redirect()->route('pelamar.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Berkas::findorFail($id);
        $item->delete();

        return redirect()->route('lamaran.index');

    }
// lihat nilai
    public function result($id)
    {
        $cek = Jawab::with([
            'user', 'detailSoal'
           ])->where('users_id', $id)->get();
  
        // $cek = Jawab::where('soals_id', $id)->where('users_id', auth()->user()->id);
        // dd($cek);
        return view('pages.admin.pelamar.detail',[
            'cek' => $cek
        ]);
    }

}

