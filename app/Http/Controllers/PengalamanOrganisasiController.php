<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\PengalamanOrganisasi;
use App\Http\Requests\Admin\PengalamanOrganisasiRequest;
use App\Biodata;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;

class PengalamanOrganisasiController extends Controller
{

        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->ajax()) {
            $query = PengalamanOrganisasi::query();

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
                                    <a class="dropdown-item" href="' . route('pengalamanorganisasi.edit', $item->id) . '">
                                        Sunting
                                    </a>
                                    <form action="' . route('pengalamanorganisasi.destroy', $item->id) . '" method="POST">
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

        return view('pages.user.pengalaman_organisasi.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.user.pengalaman_organisasi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PengalamanOrganisasiRequest $request)
    {
        // $data = $request->all();
        // PengalamanOrganisasi::create($data);
        $biodata1 = Biodata::where('users_id', '=', Auth::user()->id)->first();
        PengalamanOrganisasi::create([
            'Nama_Organisasi'  => $request->Nama_Organisasi,
            'Jabatan'  =>  $request->Jabatan,
            // 'users_id' => Auth::user()->id,
            'biodatas_id' =>  $biodata1->id,
            ]);
    
        return redirect()->route('pengalamanorganisasi.index');
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
        $item = PengalamanOrganisasi::findOrFail($id);

        return view('pages.user.pengalaman_organisasi.edit',[
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
    public function update(PengalamanOrganisasiRequest $request, $id)
    {
        $data = $request->all();

        $item = PengalamanOrganisasi::findOrFail($id);

        $item->update($data);

        return redirect()->route('pengalamanorganisasi.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = PengalamanOrganisasi::findorFail($id);
        $item->delete();

        return redirect()->route('pengalamanorganisasi.index');

    }
}
