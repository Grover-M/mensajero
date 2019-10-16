<?php

namespace App\Http\Middleware;
use Session;

use Closure;

class NisLoged
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
        if(!(Session::has('id_nino'))){
            return redirect('/lognino');

        }
        return $next($request);
    }
}
