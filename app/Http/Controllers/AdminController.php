<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() {

        return view('dashboard');
    }

    public function add_about(request $request) {

        dd($request->all());
    }
}
