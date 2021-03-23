<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\PendidikanFormal;
use App\Http\Requests\Admin\PendidikanFormalRequest;
use App\Biodata;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;

class PendidikanFormalController extends Controller
{

        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->ajax()) {
            $query = PendidikanFormal::query();

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
                                    <a class="dropdown-item" href="' . route('pendidikanformal.edit', $item->id) . '">
                                        Sunting
                                    </a>
                                    <form action="' . route('pendidikanformal.destroy', $item->id) . '" method="POST">
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

        return view('pages.user.pendidikan_formal.index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.user.pendidikan_formal.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PendidikanFormalRequest $request)
    {
        // $data = $request->all();
        // PendidikanFormal::create($data);
        $biodata1 = Biodata::where('users_id', '=', Auth::user()->id)->first();

        PendidikanFormal::create([
        'Nama_Lembaga'  => $request->Nama_Lembaga,
        'Tahun'  =>  $request->Tahun,
        'Jurusan'  =>  $request->Jurusan,
        'Tingkat'  =>  $request->Tingkat,
        // 'users_id' => Auth::user()->id,
        'biodatas_id' =>  $biodata1->id,
        ]);


        return redirect()->route('pendidikanformal.index');
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
        $item = PendidikanFormal::findOrFail($id);


        return view('pages.user.pendidikan_formal.edit',[
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
    public function update(PendidikanFormalRequest $request, $id)
    {
        $data = $request->all();

        $item = PendidikanFormal::findOrFail($id);

        $item->update($data);

        return redirect()->route('pendidikanformal.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = PendidikanFormal::findorFail($id);
        $item->delete();

        return redirect()->route('pendidikanformal.index');

    }
}
