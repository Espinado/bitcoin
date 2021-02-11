<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\Description;

class AdminController extends Controller
{
    public function index()
    {
        $description = Description::find(1);
        $about = json_decode($description->about);
        return view('dashboard', compact('about'));
    }

    public function add_about(request $request)
    {

        $array = [];
        $array = $request->except('_method', '_token');
        $about = new Description;
        try {
            $about = Description::find(1);
            $about->about = json_encode($array);
            $about->save();
            return back()->with('success', 'done');
        } catch (\Exception $exception) {
            return back()->with('error', 'error');
        }
    }
}
