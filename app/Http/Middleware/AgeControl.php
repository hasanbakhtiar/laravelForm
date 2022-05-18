<?php

namespace App\Http\Middleware;

use Closure;

class AgeControl
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
        $age = 17;
        if ($age<18) {
            //  echo 'no';
            return redirect('/age-control');
        }else{
            // echo 'yes';
        }
        return $next($request);
    }
}
