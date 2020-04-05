<?php

namespace App\Http\Middleware;

use Closure;

class age
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {
        echo $role;
        return $next($request);
    }

    public function terminate($request, $response)
    {
        echo "<br>Exiting";
    }
}
