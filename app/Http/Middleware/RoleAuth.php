<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RoleAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(!session()->has('logined')){
            return redirect('login');
         }
         //elseif(session('logined')->role !='admin'){ profile page user zone pr banane pr ye lagega
        //     return redirect('/profile');
        // }
        return $next($request);
    }
}
