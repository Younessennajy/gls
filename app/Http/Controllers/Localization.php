<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;

class Localization extends Controller
{
    public function setLang($locale){
        App::setLocale($locale);
        Session::put("locale", $locale);
        return redirect()->back();

    }
}
