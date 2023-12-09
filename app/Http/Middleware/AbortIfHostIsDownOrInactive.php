<?php

namespace App\Http\Middleware;

use App\Models\PingHost;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AbortIfHostIsDownOrInactive
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $chartName = $request->route('host', null);
        if (! PingHost::whereName('chart_name')->whereActive(true)->exists() || is_null($chartName)) {
            abort(404);
        }

        return $next($request);
    }
}
