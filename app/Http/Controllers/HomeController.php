<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view('welcome');
    }
    public function about(){
        return view('about');
    }
    public function projects(){
        return view('projects');
    }
    public function contact(){
        return view('contact');
    }
}
