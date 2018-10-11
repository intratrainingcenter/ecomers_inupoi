<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class frontend
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
      if (Auth::guard('frontend')->check() == 'member') {

          return $next($request);

      }else{

    return redirect()->route('Inupoi.index')->with('Login','Anda Belum Login');
}

    }
}
