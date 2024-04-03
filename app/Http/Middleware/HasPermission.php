<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response;

class HasPermission
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $currentPermission)
    {
        Log::alert($currentPermission);
        $role = auth()->user()->role;

        foreach ($role->permissions as $permission){
            if ($currentPermission === $permission->name){
                return $next($request);
            }
        }
        abort(403);
    }
}
