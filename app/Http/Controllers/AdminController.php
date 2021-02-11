<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\Description;

class AdminController extends Controller

{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $description = Description::first();
        if ($description) {
            $about = json_decode($description->about);
        } else {
            $about = null;
        }
        return view('dashboard', compact('about'));
    }

    public function add_about(request $request)
    {


        $array = [];
        $array = $request->except('_method', '_token');
        try {
            $about = Description::first();
            if ($about) {
                $about->about = json_encode($array);
                $about->save();
            } else {
                $about = new Description;
                $about->about = json_encode($array);
                $about->save();
            }
            return back()->with('success', 'done');
        } catch (\Exception $exception) {
            return back()->with('error', 'error');
        }
    }
}
