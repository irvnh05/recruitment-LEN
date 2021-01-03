<?php

namespace App\Http\Controllers;

use App\Pengumuman;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // $pengumuman = Pengumuman::take(6)->get();
        // $products = Product::with('galleries')->take(8)->get();

        $pengumuman = Pengumuman::take(3)->get();

        return view('pages.home',[
            'pengumuman' => $pengumuman
        ]);
    }
}