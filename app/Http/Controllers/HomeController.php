<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{
    //

    public function index(){
        return view("home.index");
    }

    public function switchLang($locale)
    {

        if (!in_array($locale, ['en', 'vi'])) {
            $locale = config('app.locale');
        }

        Session::put('locale', $locale);
        App::setLocale($locale);
        Config::set('app.locale', $locale);

        return Redirect::back();
    }
}
