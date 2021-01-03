<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Berkas;
use App\Lowongan;
use App\Pengumuman;

class DashboardController extends Controller
{
    public function index()
    {
        $lowongan = Lowongan::count();
        $pengumuman = Pengumuman::where('kategori', '=', 'aktiv')->first();
        $items = Berkas::with(['lowongan', 'biodata'])                    
                      ->whereHas('biodata', function($biodata){
                        $biodata->where('users_id', Auth::user()->id);
                    })->get();
    
        return view('pages.user.dashboardv1',[
            'lowongan' => $lowongan,
             'items' => $items,
            'pengumuman' => $pengumuman
        ]);
        // return view('pages.user.dashboardv1');
    }
}
