<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Config;
use Illuminate\Support\Facades\Redirect;

class LanguageController extends Controller
{
    public function switchLang(Request $request, $lang)
    {
       	$languages = array_keys(config('app.supported_locales'));

        // if locale is not matched then redirect to home page again.
        if(!in_array($lang, $languages))
        {
            app()->setLocale('en');
            return Redirect::back();
            return response()->json(['sdkfnsd'=>setLocate()]);
        }
        else{
			$url   = url()->previous();
			$url_explode = explode("/",$url);
			$url_explode[3] = $lang;
			$redir = implode('/',$url_explode);
            app()->setLocale($lang);

            return redirect($redir);
        }
    }
}
