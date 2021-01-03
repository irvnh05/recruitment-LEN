<?php

namespace App\Http\Controllers;

use App\Cart;
use Illuminate\Http\Request;
use App\Pengumuman;
use Illuminate\Support\Facades\Auth;

class DetailpengumumanController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request, $id)
    {
        $pengumuman = Pengumuman::query()->where('id', $id)->firstOrFail();

        return view('pages.detailpengumuman', [
            'pengumuman' => $pengumuman
        ]);
    }

    // public function add(Request $request, $id)
    // {
    //     $data = [
    //         'products_id' => $id,
    //         'users_id' => Auth::user()->id
    //     ];

    //     Cart::create($data);

    //     return redirect()->route('cart');
    // }
}
