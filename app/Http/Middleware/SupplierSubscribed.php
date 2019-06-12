<?php

namespace App\Http\Middleware;

use Closure;

class SupplierSubscribed
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
        if($request->user() && !(
          auth()->user()->subscribed('Basic') ||
          auth()->user()->subscribed('Standard') ||
          auth()->user()->subscribed('Premium')
        ))
          return redirect(route('payment'));

        return $next($request);
    }
}
