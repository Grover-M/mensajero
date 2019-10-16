<?php

namespace App\Http\Middleware;
use Session;

use Closure;

class CheckNino
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
        if(Session::has('id_nino')){
            return redirect('/main/nino');

        }
        return $next($request);
    }
}
