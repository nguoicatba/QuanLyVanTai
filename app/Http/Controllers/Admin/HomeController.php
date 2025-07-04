<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    //

    public function index()
    {
        return view("home.index");
    }

    public function switchLang($locale)
    {

        if (!in_array($locale, ['en', 'vi'])) {
            $locale = config('app.locale');
        }

        Session::put('locale', $locale);


        return Redirect::back();
    }
}
