<?php

namespace App\Http\Middleware;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Support\Facades\Auth;
use App\User;


use Closure;

class Admin
{
    protected $auth;
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function __construct(Guard $auth){
        $this->auth = $auth;
    }

    public function handle($request, Closure $next)
    {   
        
       //dd(Auth::check() && Auth::check());
    if(Auth::check() && Auth::user()->type == "admin")
        {
        return $next($request);
        }                    
        //return redirect()->guest('/');                
    else{
         abort(401);        
        }
    }
}
