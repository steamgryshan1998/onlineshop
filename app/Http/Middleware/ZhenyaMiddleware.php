<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ZhenyaMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $needHeader = 'Zalupa';
        $needValue = 'pizda';
        if($request->header($needHeader) === $needValue){
            return response()->json('Access denied', 403);
        }
        return $next($request);
    }
}
