<?php

namespace App\Http\Middleware;

use Closure;

class SetLocale
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
        $languages = array_keys(config('app.supported_locales'));
        
        // if locale is not matched then redirect to home page again.
         if(!in_array($request->segment(1), $languages))
        {
            app()->setLocale('en');
            return redirect('/');
        }
        else{
            
            // set request language to locale
            app()->setLocale($request->segment(1));
        }
        
        return $next($request);
    }
}
