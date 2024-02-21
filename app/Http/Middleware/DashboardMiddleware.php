<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class DashboardMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $userRole = auth()->user()->roles->first()->name;

        $dashboardRoles = ['admin', 'CEO', 'HR'];

        if (auth()->check() && in_array($userRole, $dashboardRoles)) {
            return $next($request);
        }

        return redirect('/login');
    }
}
