<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Biodata;
use App\User;
use App\Http\Requests\Admin\BiodataRequest;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BiodataController extends Controller
{
    public function store(Request $request)
    {
                
        $user = Auth::user();
        $item = Biodata::where('users_id', '=', Auth::user()->id)->first();
        

        // if($request->session()->has('users_id', 'Auth::user()->id')) {
        //     return Biodata::create([
        //     'users_id' => Auth::user()->id,
        // ]);
        // } else {
        //      return view('pages.user.biodata.index',[
        //     'item' => $item,
        //     'user' => $user
        // ]);
        // }
                if($item != null) {
             return view('pages.user.biodata.index',[
            'item' => $item,
            'user' => $user
        ]);
        } else {
            Biodata::create([
            'users_id' => Auth::user()->id,
        ]);
        return redirect()->route('test');

        }
        
    }

        public function home()

    {
        $user = Auth::user();
        $item = Biodata::where('users_id', '=', Auth::user()->id)->first();

        return view('pages.user.biodata.index',[
            'item' => $item,
            'user' => $user
        ]);
    }



    public function update(Request $request ,$redirect )
    // {
    //     $data = $request->all();

    //     $item = Biodata::first();

    //     $item->update($data);

    //     return view('pages.user.biodata.index',[
    //         'item' => $item
    //     ]);
    // }
    {
        $data = $request->all();

        $item = Biodata::with(['user'])->where('users_id', '=', Auth::user()->id)->first();
        // $data['foto'] = $request->file('foto')->store('assets/datadiri', 'public');

        $item->update($data);

        return redirect()->route($redirect);
    }

}
