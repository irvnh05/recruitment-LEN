<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Harapan;
use App\Http\Requests\Admin\HarapanRequest;
use App\Biodata;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;

class HarapanController extends Controller
{

        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->ajax()) {
            $query = Harapan::query();

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
                                    <a class="dropdown-item" href="' . route('harapan.edit', $item->id) . '">
                                        Sunting
                                    </a>
                                    <form action="' . route('harapan.destroy', $item->id) . '" method="POST">
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

        return view('pages.user.harapan.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.user.harapan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(HarapanRequest $request)
    {
        // $data = $request->all();
        // Harapan::create($data);

        $biodata1 = Biodata::where('users_id', '=', Auth::user()->id)->first();
        Harapan::create([
            'Harapan_Karir'  => $request->Harapan_Karir,
            'Permintaan_Gaji'  =>  $request->Permintaan_Gaji,
            'Minat_Posisi_Jika_Ditolak'  =>  $request->Minat_Posisi_Jika_Ditolak,
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
        $item = Harapan::findOrFail($id);

        return view('pages.user.harapan.edit',[
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
    public function update(HarapanRequest $request, $id)
    {
        $data = $request->all();

        $item = Harapan::findOrFail($id);

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
        $item = Harapan::findorFail($id);
        $item->delete();

        return redirect()->route('pengalamanorganisasi.index');

    }
}
