<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\App;
use App\Models\Message;


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

    public function submit(request $request) {


        try{
           $message =new Message;
           $message->name=$request->name;
           $message->email=$request->email;
           $message->message=$request->message;
           $message->save();
           return back()->with('success',__('send'));

        } catch (\Exception $exception) {
            return back()->with('error',__('not_send'));
        }

    }
}
