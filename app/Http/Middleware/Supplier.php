<?php

namespace App\Http\Middleware;

use Closure;

class Supplier
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
        if(!$request->user()->supplier)
          return redirect(route('error.403'));

        return $next($request);
    }
}
