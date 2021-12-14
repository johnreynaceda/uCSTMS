<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Office
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (auth()->check()) {
            if (auth()->user()->user_type_id == 2) {
                         return $next($request);
            }elseif (auth()->user()->user_type_id == 1) {
                return redirect('/administrator');
            }else{
                return redirect('/student');
            }

             return redirect()->route('login');
        }
         return redirect()->route('login');
    }
}
