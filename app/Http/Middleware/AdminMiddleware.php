<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        if (!Auth::check()) {
            // Belum login → redirect ke login admin
            return redirect('halawangi/admin');
        }

        if (Auth::user()->role !== 'admin') {
            // Sudah login, tapi bukan admin → tolak akses
            abort(403, 'Akses ditolak.');
        }

        return $next($request);
    }
}
