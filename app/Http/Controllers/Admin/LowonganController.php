<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Lowongan;
use App\Program;

use App\Http\Requests\Admin\LowonganRequest;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;

class LowonganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        if (request()->ajax()) {
            $query = Lowongan::with(['program']);

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
                                    <a class="dropdown-item" href="' . route('lowongan.edit', $item->id) . '">
                                        Sunting
                                    </a>
                                    <form action="' . route('lowongan.destroy', $item->id) . '" method="POST">
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
        
        $programs = Program::all();
        $lowongans = Lowongan::all();

        return view('pages.admin.lowongan.index'
        ,[
            'programs' => $programs,
            'lowongans' => $lowongans
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $programs = Program::all();
        
        return view('pages.admin.lowongan.create',[
            'programs' => $programs
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LowonganRequest $request)
    {
        $data = $request->all();

        $data['slug'] = Str::slug($request->name);

        Lowongan::create($data);

        return redirect()->route('lowongan.index');
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
        $item = Lowongan::with(['program'])->findOrFail($id);
        $programs = Program::all();
        
        return view('pages.admin.lowongan.edit',[
            'item' => $item,
            'programs' => $programs
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(LowonganRequest $request, $id)
    {
        $data = $request->all();

        $item = Lowongan::findOrFail($id);

        $item->update($data);

        return redirect()->route('lowongan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Lowongan::findorFail($id);
        $item->delete();

        return redirect()->route('lowongan.index');

    }
}