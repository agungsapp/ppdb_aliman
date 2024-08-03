<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     * @param  string[] ...$roles
     */
    public function handle(Request $request, Closure $next, ...$roles): Response
    {
        $user = $request->user();

        if ($user && in_array($user->role, $roles)) {
            // Jika user memiliki salah satu role yang diperlukan, lanjutkan request.
            return $next($request);
        }

        // Jika user tidak memiliki salah satu role yang diperlukan, arahkan ke halaman lain atau berikan akses ditolak.
        return redirect()->route('siswa.beranda.index');
    }
}
