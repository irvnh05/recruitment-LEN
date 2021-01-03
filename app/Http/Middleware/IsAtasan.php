<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class IsAtasan
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(Auth::user() && Auth::user()->roles == 'ATASAN')
        {
            return $next($request);
        }

        return redirect('/');
        
        //  if ($request->user()->roles('USER')) {
        //     return redirect('beranda');
        // }

        // if ($request->user()->roles('ADMIN')){
        //     return redirect('admin');
        // }
 
    }
}
