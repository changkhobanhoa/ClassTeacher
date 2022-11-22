<?php

namespace App\Http\Middleware;

use App\Models\RoleUser;
use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckAdmin
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
        $type = RoleUser::where('user_id',Auth::id())->first();
    
        if($type->role_id==3){
            return $next($request);
        }
        else{
            return response(view('welcome')->with('errors', 'Bạn ko có quyền truy cập'));
        }
    }
}
