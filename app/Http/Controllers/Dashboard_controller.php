<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Dashboard_controller extends Controller
{
    //
    public function __construct()
    {
        $this->middleware(['auth']);
    }
    public function index(){

        // dd(auth()->user()->posts);
        // dd(auth()->user());     to check if the user is actually signed in
        return view('dashboard');

    }


}
