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
    public function handle(Request $request, Closure $next): Response
    {

        if(Auth::check() && Auth::user()->is_admin) //cek sudah login dan yang masuk adalah admin.
        {
            return $next($request); //dilanjutkan ke routing selanjutnya
        }
        //handle jika bukan admin, diarahkan ke dashboard user.
        return redirect()->route('dashboard.user');
    }
}
