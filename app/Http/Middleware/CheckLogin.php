<?php

namespace App\Http\Middleware;
use Closure;
use Illuminate\Support\Facades\Auth;

class CheckLogin
{
    public function index()
    {
        return view('school.login');
    }
    public function handle($request, Closure $next){
        if( Auth::check()){
            return $next($request);
        }
        return redirect()->route('progressLogin');
    }
}
