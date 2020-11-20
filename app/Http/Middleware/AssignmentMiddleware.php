<?php

namespace App\Http\Middleware;

use Closure;

class AssignmentMiddleware
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
           if($request->input('assignment')<=200){
            return redirect('assignment');
        }
     
        return $next($request);
    }
}
