<?php

namespace App\Http\Middleware;

use Closure;
use Sentinel;

class AdminUser
{
    public function handle($request, Closure $next)
    {
       $user = Sentinel::getUser();
       $admin = Sentinel::findRoleByName('Admin');

       if (!user->inRole($admin)){
       	return redirect('login');
        }

        return $next($request);
    }
}
