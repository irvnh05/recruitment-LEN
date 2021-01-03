<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class SuksesregisController extends Controller
{
    public function index()
    {
        return view('auth.suksesregis');
    }
}
