<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Bahasa;
use App\Http\Requests\Admin\BahasaRequest;
use App\Biodata;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;

class BahasaController extends Controller
{

        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->ajax()) {
            $query = Bahasa::query();

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
                                    <a class="dropdown-item" href="' . route('bahasa.edit', $item->id) . '">
                                        Sunting
                                    </a>
                                    <form action="' . route('bahasa.destroy', $item->id) . '" method="POST">
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

        return view('pages.user.bahasa.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.user.bahasa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BahasaRequest $request)
    {
        // $data = $request->all();
        // Bahasa::create($data);
        $biodata1 = Biodata::where('users_id', '=', Auth::user()->id)->first();

        Bahasa::create([
        'Bahasa'  => $request->Bahasa,
        'Lisan'  =>  $request->Lisan,
        'Tulisan'  =>  $request->Tulisan,
        // 'users_id' => Auth::user()->id,
        'biodatas_id' =>  $biodata1->id,
        ]);

        return redirect()->route('pendidikannonformal.index');
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
        $item = Bahasa::findOrFail($id);

        return view('pages.user.bahasa.edit',[
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
    public function update(BahasaRequest $request, $id)
    {
        $data = $request->all();

        $item = Bahasa::findOrFail($id);

        $item->update($data);

        return redirect()->route('pendidikannonformal.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Bahasa::findorFail($id);
        $item->delete();

        return redirect()->route('pendidikannonformal.index');

    }
}
