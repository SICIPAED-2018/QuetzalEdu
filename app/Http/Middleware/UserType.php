<?php

namespace App\Http\Middleware;
use Auth;
use Closure;

class UserType
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
        if(Auth::user()->type==1)
            return response()->view('admin.home');
        if(Auth::user()->type==2)
            return response()->view('instructor.home');
        if(Auth::user()->type==3)
            return response()->view('cliente.home');
        return $next($request);
    }
}
