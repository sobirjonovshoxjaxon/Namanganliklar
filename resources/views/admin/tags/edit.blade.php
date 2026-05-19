@extends('admin.requires.general')
@section('content')

            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="card">  
                  <div class="card-header">
                    <h4>Tag Update Form</h4>
                    <a href="{{ route('tags.index')}}" class="btn btn-dark">Back</a>
                  </div>
                  <div class="card-body">


                   <form action="{{ route('tags.update',$tag->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf 
                        @method('PUT')


                        <div class="form-group">
                            <label>Tag</label>
                            <input name="tag" type="text" class="form-control" value="{{ $tag->tag }}">
                            @error('tag')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    
                     
                        <button type="submit" class="btn btn-warning">Update</button>
                        <button type="reset" class="btn btn-primary">Reset</button>
                   </form>
                   
                    
                   
                </div>
               
                
            </div>


@endsection