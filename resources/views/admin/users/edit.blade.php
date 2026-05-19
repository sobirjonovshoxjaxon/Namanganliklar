@extends('admin.requires.general')
@section('content')

            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="card">  
                  <div class="card-header">
                    <h4>User Update Form</h4>
                    <a href="{{ route('users.index')}}" class="btn btn-dark">Back</a>
                  </div>
                  <div class="card-body">


                   <form action="{{ route('users.update',$user->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf 
                        @method('PUT')


                        <div class="form-group">
                            <label>Name</label>
                            <input name="name" type="text" class="form-control" value="{{ $user->name }}">
                            @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Image</label>
                            <input name="image" type="file" class="form-control">
                            <img width="300" src="{{ asset('storage/'.$user->image)}}" alt="">

                            @error('image')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Email</label>
                            <input name="email" type="email" class="form-control" value="{{ $user->email }}">
                            @error('email')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <div class="form-group">
                            <label>Password</label>
                            <input name="password" type="password" class="form-control" value="{{ $user->password }}">

                            @error('password')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    
                    
                     
                        <button type="submit" class="btn btn-warning">Update</button>
                        <button type="reset" class="btn btn-primary">Reset</button>
                   </form>
                   
                    
                   
                </div>
               
                
            </div>


@endsection