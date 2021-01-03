<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Lowongan;
use App\Program;
Use App\Berkas;
use App\Biodata;
use App\Http\Requests\Admin\LowonganRequest;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Auth;

class LowongannController extends Controller
{

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
                                    <a class="dropdown-item" href="' . route('detail', $item->id) . '">
                                       Detail
                                    </a>
                                    <form action="' . route('lamar', $item->id) . '" method="POST">
                                        ' . method_field('post') . csrf_field() . '
                                        <button type="submit" class="dropdown-item text-danger">
                                            Ajukan Lamaran
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

        return view('pages.user.lowongan.index'
        ,[
            'programs' => $programs,
            'lowongans' => $lowongans
        ]);
    }

    // public function update(Request $request, $id)
    // {



    //     // $lamars = Berkas::with(['lowongan','biodata'])
    //     //                 // ->where('biodatas_id', Auth::user()->id)
    //     //                 // ->first();
    //     //             ->whereHas('biodata', function($biodata){
    //     //                 $biodata->where('users_id', Auth::user()->id);
    //     //             })->first();

    //     $biodata = Biodata::where('users_id', '=', Auth::user()->id)->first();

    //     $berkas = Berkas::create([
    //         'lowongans_id' => $id,
    //         'biodatas_id' =>$biodata->id,
    //         'status' => 'Riview'
    //         ]);


    //     return redirect()->route('lihatlowongan.show', $berkas->id);
    // }

    public function show(Request $request, $id)
    {
                $lamar = Berkas::with(['lowongan'])
                  ->first();

        return view('pages.user.lowongan.detail',[
            'lamar' => $lamar
        ]);
    }



}