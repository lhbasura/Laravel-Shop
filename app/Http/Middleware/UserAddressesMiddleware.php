<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Log;

class UserAddressesMiddleware
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
     //   $this->authorize('own', $request->user_address);
        return $next($request);
    }
}
