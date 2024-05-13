<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;
use Illuminate\Http\Request;

class Homecontroller extends Controller
{

    function change(Request $request, $lang){
        session()->put('locale', $lang);
        // dd(session()->get('locale'));
        App::setLocale($lang);
        Config::set('app.locale', $lang);
        session()->put('locale', $lang);

        return redirect()->route('home',$lang); 
    }

    function contact(Request $request, $lang, $next){
        return view('contact', compact('next'));
    }


}
