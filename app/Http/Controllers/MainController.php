<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\App;

class MainController extends Controller
{
    public function index()
     {
return view('layouts.main');
    }


    public function language(Request $request, string $language)
{
    try {
        if (array_key_exists($language, config('locale.languages'))) {
            Session::put('locale', $language);
            App::setLocale($language);
            return redirect()->back();
        }
        return redirect('/');
    } catch (\Exception $exception) {
        return redirect('/');
    }
}
}
