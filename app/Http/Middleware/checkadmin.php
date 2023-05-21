<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Redirect;

class checkadmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(auth()->user()->admin==1){
            return $next($request);
        }else{
        return redirect('getadmindashboard')->with('error','You have no admin access');
        //abort(403, 'Unauthorized action.');
        

        }


        /*if(auth()->check() && auth()->user()) {
            return $next($request); 
        }
        else{
            return redirect()->route('login')->with('error','You have no admin access');
        }  */
    }

}
