<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Log;

class checkAge
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
        $response =  $next($request);
        Log::info(Auth()->user()->name.'成功登录到系统');
        return $response;
    }
}
