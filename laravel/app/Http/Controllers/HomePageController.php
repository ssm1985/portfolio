<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index(){
        return view ('homepage');
    }

    public function contact(){
        return view('contact');
    }

    public function about(){
        return view('about');
    }

    public function projects(){
        return view('projects');
    }
}
