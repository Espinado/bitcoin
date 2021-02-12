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
            $why = json_decode($description->why);
        } else {
            $about = null;
            $why = null;;
        }
        return view('dashboard', compact('about', 'why'));
    }

    public function add_about(request $request)
    {
        // Records should be saved in json format
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
            // Check if record exists to update. If not, creating new ont
            return back()->with('success', 'done');
        } catch (\Exception $exception) {
            return back()->with('error', 'error');
        }
    }

    public function add_why(request $request)
    {
        // Records should be saved in json format
        $array = [];
        $array = $request->except('_method', '_token');
        try {
            // Check if record exists to update. If not, creating new ont
            $why = Description::first();
            if ($why) {
                $why->why = json_encode($array);
                $why->save();
            } else {
                $why = new Description;
                $why->why = json_encode($array);
                $why->save();
            }
            return back()->with('success', 'done');
        } catch (\Exception $exception) {
            return back()->with('error', 'error');
        }
    }
}
