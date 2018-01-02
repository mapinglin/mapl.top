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
       // $method = $request->method();
        //var_dump($method);
       // exit;
        $user = Auth()->user();
//        var_dump($user);
//        exit;
        Event::fire(new CrudLogEvent($user));
        return $response;
    }
}
