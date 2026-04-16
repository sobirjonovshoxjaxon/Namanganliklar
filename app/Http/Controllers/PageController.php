<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PageController extends Controller
{
    public function index(){

        $posts = Post::latest()->limit(15)->get();
        return view('index',compact('posts'));
    }

    public function contact(){
        return view('contact');
    }

    public function post(){
        return view('posts');
    }

    public function postDetail(Post $post){

        return view('postdetail',compact('post'));
    }
}
