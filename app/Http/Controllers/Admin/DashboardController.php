<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Lowongan;
use App\Berkas;

class DashboardController extends Controller
{

    public function index()
    {
    // public function index()
    // {
    //     $customer = User::count();
    //     $revenue = Transaction::sum('total_price');
    //     $transaction = Transaction::count();

    //     return view('pages.admin.dashboard',[
    //         'customer' => $customer,
    //         'revenue' => $revenue,
    //         'transaction' => $transaction
    //     ]);
    // }
        $lowongan = Lowongan::count();
        $pelamar = Berkas::count();
        $lolosseleksi = Berkas::where('status','Interview')->count();

        return view('pages.admin.dashboardv1',[
            'lowongan' => $lowongan,
            'pelamar' => $pelamar,
            'lolosseleksi' => $lolosseleksi
        ]);

        // return view('pages.admin.dashboardv1');
    }
}
