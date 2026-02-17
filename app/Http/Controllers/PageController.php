<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view('index');
    }

    public function contact(){
        return view('contact');
    }

    public function post(){
        return view('posts');
    }

    public function postDetail(){
        return view('postdetail');
    }
}
