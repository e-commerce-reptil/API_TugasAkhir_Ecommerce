<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class EnsureUserRoleIsAllowedToAccess
{


    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        //echo 'The middleware for accsess role runs everytime a http request is made.<br/>';

        $userRole = auth()->user()->role;
        $currentRouteName = Route::currentRouteName();

        //echo 'UserRole: ' . $userRole . '</br>';
        //echo 'Current Route Name: ' . $currentRouteName . '</br>';

        if(in_array($currentRouteName, $this->userAccessRole()[$userRole])){
             return $next($request);
        } else {
            abort(40, 'Kamu Tidak Memiliki Akses');
        }

    }

    private function userAccessRole()
    {
        return [
            'user' => [
                'dashboard',
            ],
            'admin' => [
                'dashboard',
                'article',
                'posts',
                'category',
            ]
        ];
    }
}