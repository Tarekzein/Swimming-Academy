<?php

namespace App\Http\Middleware;

use App\Models\admin\Admin;
use Closure;
use Illuminate\Http\Request;

class IsAdmin
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
        $admin =  Admin::all()->where("uid",auth()->user()->id);
        if(count($admin) !=0)
            return $next($request);

        return redirect("/");
    }
}
