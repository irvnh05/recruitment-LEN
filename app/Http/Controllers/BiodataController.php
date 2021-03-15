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
            'user' => $user,
        ]);
        } else {
            Biodata::create([
            'users_id' => Auth::user()->id,
            'foto'     =>  'assets/datadiri/user.png',
            'Nama_Lengkap' => Auth::user()->name,
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



    public function update(BiodataRequest $request ,$redirect)
    // $data = $request->all();

    // $data['slug'] = Str::slug($request->name);

    // $item = Program::findOrFail($id);

    // $item->update($data);

    // return redirect()->route('program.index');
    {
        // $id   = Biodata::with(['user'])->where('users_id', '=', Auth::user()->id)->first();
        $data = $request->all();
        // $item = Biodata::with(['user'])->findOrFail($id);

        // $item = Biodata::with(['user'])->where('users_id', '=', Auth::user()->id)->get();
        $item = Biodata::with(['user'])->where('users_id', '=', Auth::user()->id)->first();
        // $data['foto'] = $request->file('foto')->store('assets/datadiri', 'public');
        if  ($request->file('foto') == null) {
            $file = "";
        }else{
            $data['foto'] = $file = $request->file('foto')->store('assets/datadiri', 'public');  
        }

        $item->update($data);

        // session()->flash('success', 'Profile updated successfully.');
        return redirect()->route($redirect);
    }

}
