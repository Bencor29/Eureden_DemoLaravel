<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Response;

class MaintenanceMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        return new Response(['message' => 'Cette page est en maintenance'], 403);
    }
}
