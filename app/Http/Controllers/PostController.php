<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Models\Post;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::paginate(15);
        return view('admin.posts.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PostRequest $request)
    {
      

        if($request->hasFile('image')){

            $fileName = $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('post-photos', $fileName);
        }

        $post = Post::create([

            'title' => $request->title,
            'image' => $path ?? 'avatar.jpg',
            'short_content' => $request->short_content,
            'content' => $request->content,
        ]);

        return to_route('posts.index');
       
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('admin.posts.show',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view('admin.posts.update',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PostRequest $request, Post $post)
    {
        if($request->hasFile('image')){

            if(isset($post->image)){

                Storage::delete($post->image);
            }

            $fileName = $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('post-photos',$fileName);
        }

        $post->update([

            'title' => $request->title,
            'short_content' => $request->short_content,
            'image' => $path ?? $post->image,
            'content' => $request->content,
        ]);

        return to_route('posts.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        if(isset($post->image)){

            Storage::delete($post->image);
        }

        $post->delete();
        return redirect()->back();
    }
}
