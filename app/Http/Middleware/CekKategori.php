<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth as Auth;

class CekKategori
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
        if ((!Auth::guest()) && (Auth::user()->kategori == 'provinsi')) {
           return $next($request);
       }elseif ((!Auth::guest()) && (Auth::user()->kategori == 'kabupaten')) {
           return $next($request);
       }else return redirect('/');

    }
}
