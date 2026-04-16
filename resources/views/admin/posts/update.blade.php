@extends('admin.requires.general')
@section('content')

            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="card">  
                  <div class="card-header">
                    <h4>Post Create Form</h4>
                    <a href="{{ route('posts.index')}}" class="btn btn-dark">Back</a>
                  </div>
                  <div class="card-body">


                   <form action="{{ route('posts.update',$post->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf 
                        @method('PUT')


                        <div class="form-group">
                            <label>Title</label>
                            <input name="title" type="text" class="form-control" value="{{ $post->title }}">
                            @error('title')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Image</label>
                            <input name="image" type="file" class="form-control">
                            <img width="150px;" src="{{ asset('storage/'.$post->image)}}" alt="">
                            @error('image')
                                <div class="alert alert-danger">{{ $message}}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Short content</label>
                            <input name="short_content" type="text" class="form-control" value="{{ $post->short_content }}">
                            @error('short_content')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    
                    
                        <div class="form-group">
                            <label>Textarea</label>
                            <textarea class="form-control" name="content">{{ $post->content }}</textarea>
                            @error('content')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-warning">Update</button>
                        <button type="reset" class="btn btn-primary">Reset</button>
                   </form>
                   
                    
                   
                </div>
               
                
            </div>


@endsection