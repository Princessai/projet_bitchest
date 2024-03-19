<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class VerifyUserType
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
        public function handle(Request $request, Closure $next, $type, $prefix)
    {
        if ($type === 'customer' && !auth()->guard('customers')->check()) {
            return redirect()->route('login');
        }

        if ($type === 'admin' && !auth()->guard('admins')->check()) {
            return redirect()->route('login');
        }

        // Ajoutez le préfixe dynamiquement à la route
        $route = $prefix . '.cours.crypto'; // Par exemple, si le préfixe est 'admin', la route deviendra 'admin.cours.crypto'

        return redirect()->route($route, ['crypto_id' => $request->route('crypto_id')]);
    }

}
