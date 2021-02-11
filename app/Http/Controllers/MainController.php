<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\App;
use App\Models\Message;
use Illuminate\Support\Facades\Mail;
use App\Mail\sendingEmail;
use App\Models\Description;



class MainController extends Controller
{
    public function index()
    {
        $description = Description::first();
        $text = [];
        $about = json_decode($description->about);
        foreach ($about as $key => $value) {
            if ($key === App::getLocale()) {
                foreach ($value as $k => $val) {
                    array_push($text, $val);
                }
            }
        }
       
        return view('layouts.main', compact('text'));
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

    public function submit(request $request)
    {


        try {
            $message = new Message;
            $message->name = $request->name;
            $message->email = $request->email;
            $message->message = $request->message;
            $message->save();


            $data = array(
                'name' => $request->name,
                'message' => $request->message
            );

            Mail::to('Receiver Email Address')->send(new sendingEmail($data));


            return back()->with('success', __('send'));
        } catch (\Exception $exception) {
            return back()->with('error', __('not_send'));
        }
    }
}
