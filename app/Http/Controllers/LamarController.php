<?php

namespace App\Http\Controllers;

use App\Berkas;
use App\Biodata;
use App\Lowongan;
use Exception;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LamarController extends Controller
{
    public function process($id)
    {
        // $lamars = Berkas::with(['lowongan','biodata'])
        //                 // ->where('biodatas_id', Auth::user()->id)
        //                 // ->first();
        //             ->whereHas('biodata', function($biodata){
        //                 $biodata->where('users_id', Auth::user()->id);
        //             })->first();

        $biodata = Biodata::where('users_id', '=', Auth::user()->id)->first();

        $berkas = Berkas::create([
            'lowongans_id' => $id,
            'biodatas_id' =>$biodata->id,
            'status' => 'Riview'
            ]);


        return redirect()->route('sukses', $berkas->id);
    }

        public function show(Request $request)
    {
                $lamar = Berkas::with(['lowongan'])
                  ->first();

        return view('pages.user.lowongan.sukses',[
            'lamar' => $lamar
        ]);
    }
}