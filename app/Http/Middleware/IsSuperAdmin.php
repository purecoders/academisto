<?php
namespace App\Http\Middleware;
use Closure;
use Illuminate\Support\Facades\Auth;
class IsSuperAdmin
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
        $user = Auth::user();
        $roles = $user->roles;
        $isSuperAdmin = false;
        foreach ($roles as $role){
            if($role->name == 'super_admin'){
                $isSuperAdmin = true;
                break;
            }
        }
        if($isSuperAdmin){
            return $next($request);
        }else{
            //redirect user to user-panel
            return redirect('/user-panel');
        }
    }
}