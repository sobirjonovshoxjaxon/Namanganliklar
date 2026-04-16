@extends('admin.requires.general')
@section('content')


    <h1>Post Show Page</h1>

    <h4><b>Title: </b>{{ $post->title}}</h4>

    <h4><b>Image: </b></h4>
    <img width="300px" src="{{ asset('storage/'. $post->image)}}" alt="">

    <h4><b>Short Content: </b></h4>
    <p>{{ $post->short_content}}</p>

    <h4><b>Content: </b></h4>
    <p>{{ $post->content}}</p>

    <a href="{{ route('posts.index')}}" class="btn btn-dark">Back</a>


@endsection