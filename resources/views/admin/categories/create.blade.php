@extends('admin.requires.general')
@section('content')

            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="card">  
                  <div class="card-header">
                    <h4>User Create Form</h4>
                    <a href="{{ route('categories.index')}}" class="btn btn-dark">Back</a>
                  </div>
                  <div class="card-body">


                   <form action="{{ route('categories.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf 


                        <div class="form-group">
                            <label>Category</label>
                            <input name="category" type="text" class="form-control" value="{{ old('category')}}">
                            @error('category')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    
                     
                        <button type="submit" class="btn btn-success">Create</button>
                        <button type="reset" class="btn btn-warning">Reset</button>
                   </form>
                   
                    
                   
                </div>
               
                
            </div>


@endsection