<?php

namespace App\Http\Middleware;

use App\Events\CrudLogEvent;
use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Event;

class LogCurd
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
        $response = $next($request);

        return $response;
    }
}
