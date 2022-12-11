<?php

namespace App\Http\Middleware;

use App\Http\Controllers\PlaygameController;
use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;

class Game
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $check = new PlaygameController();
        if($check->middlewareGame() == FALSE)
        {
            return redirect(RouteServiceProvider::HOME)
            ->with('aturan','anda tidak memenuhi syarat');
        }else{

            return $next($request);
        }
    }
}
