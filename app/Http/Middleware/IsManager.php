<?php

namespace App\Http\Middleware;

use App\Models\admin\Admin;
use App\Models\manager\Manager;
use Closure;
use Illuminate\Http\Request;

class IsManager
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
//        $admin =  auth()->user()->admins()->where("uid",auth()->user()->id)->get()[0];
        $manager =  Manager::all()->where("uid",auth()->user()->id);
        if(count($manager) !=0)
            return $next($request);

        return redirect("/");
    }
}
