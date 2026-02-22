@extends('admin.includes.general')
@section('content')

            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="card">  
                  <div class="card-header">
                    <h4>Post Create Form</h4>
                    <a href="{{ route('posts.index')}}" class="btn btn-dark">Back</a>
                  </div>
                  <div class="card-body">


                   <form action="{{ route('posts.store')}}" method="POST">
                        @csrf 


                        <div class="form-group">
                            <label>Title</label>
                            <input name="title" type="text" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Image</label>
                            <input name="image" type="file" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Short content</label>
                            <input name="short_content" type="text" class="form-control">
                        </div>
                    
                    
                        <div class="form-group">
                            <label>Textarea</label>
                            <textarea class="form-control" name="content"></textarea>
                        </div>

                        <button type="submit" class="btn btn-success">Create</button>
                        <button type="reset" class="btn btn-warning">Reset</button>
                   </form>
                   
                    
                   
                </div>
               
                
            </div>


@endsection