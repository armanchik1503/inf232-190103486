<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class HomeController extends Controller
{
    public function index(){
        return view('index');
    }

    public function about(){
        return view('about');
    }

    public function portfolio(){
        return view('portfolio');
    }

    /*public function contact(){
        return view('contact');
    }*/

    public function changeLocal($locale){
        session(['locale' => $locale]);
        App::setLocale($locale);
        return redirect()->back();

    }
}
