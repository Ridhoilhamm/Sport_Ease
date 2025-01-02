<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class Rolemiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        
            if (!Auth::check()) {
                // Jika belum login, arahkan ke halaman login
                return redirect('/auth/login');
            }
    
            if (Auth::user()->role !== $role) {
                // Jika role tidak sesuai, redirect ke halaman login
                return redirect('/auth/login')->with('error', 'Anda tidak memiliki akses.');
            }
    
            return $next($request);
        
    }
}