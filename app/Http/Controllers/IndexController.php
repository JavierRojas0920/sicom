<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }

    public function television(){
        return view('frontend.television');
    }

    public function canal($canal){
        return view('frontend.canal', compact('canal'));
    }

    public function radio(){
        return view('frontend.radio');
    }

    public function radios($slug){
        return view('frontend.radios', compact('slug'));
    }

    public function revista(){
        return view('frontend.revista');
    }
}
