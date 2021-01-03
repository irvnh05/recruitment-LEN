<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Berkas;
use App\Http\Requests\Admin\BerkasRequest;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Auth;
class BerkasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Berkas::with(['lowongan', 'biodata'])                    
                      ->whereHas('biodata', function($biodata){
                        $biodata->where('users_id', Auth::user()->id);
                    })->get();
    
        
        return view('pages.user.lamaran.index',[
            'items' => $items
        ]);
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
        $item = Berkas::with([
         'lowongan', 'biodata'
        ])->findOrFail($id);

        return view('pages.user.lamaran.detail',[
            'item' => $item
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Berkas::findOrFail($id);

        return view('pages.user.lamaran.edit',[
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
    public function update(BerkasRequest $request, $id)
    {
        $data = $request->all();

        $item = Berkas::findOrFail($id);

        $item->update($data);

        return redirect()->route('lamaran.index');
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
}

