@extends('admin.requires.general')
@section('content')


    <h1>User Show Page</h1>

    <h4><b>Name: </b>{{ $user->name }}</h4>

    <h4><b>Image: </b></h4>
    <img width="300px" src="{{ asset('storage/'. $user->image)}}" alt="">

    <h4><b>Email</b></h4>
    <p>{{ $user->email }}</p>

    <h4><b>Password</b></h4>
    <p>{{ $user->password }}</p>

    <a href="{{ route('users.index')}}" class="btn btn-dark">Back</a>


@endsection