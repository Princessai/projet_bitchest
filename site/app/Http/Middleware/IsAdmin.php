<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if ($request->session()->has('user')) {
            $user = $request->session()->get('user');
                if($user['role'] == 'admin'){

                    return $next($request);
                }            
        }

        return redirect('/login')->with('message', 'you are not an admin') ;
    }
}
