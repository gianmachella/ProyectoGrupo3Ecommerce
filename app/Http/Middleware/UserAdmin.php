<?php

namespace App\Http\Middleware;

use Closure;

class UserAdmin
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
        if(!(\auth())->check()){
          return redirect('/login')->with('error', 'Debes iniciar secion primero');
        }

        if (auth()->user()->role_id != 2) {
          return redirect('/inicio')->with('error', 'No tienes los permisos necesarios para ingresar');
        }

        return $next($request);
    }
}
