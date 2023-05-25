<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
Use Illuminate\Support\Facades\Redirect;

class Level
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, ...$Levels)
    {
        if(in_array($request->user()->level, $Levels)){
            return $next($request); 
        }

        if(Auth::user()->level == 'admin'){
            return Redirect::to('dashboard');
        }else if(Auth::user()->level == 'pelanggan'){
            return Redirect::to('home');
        }
        
    }
}
